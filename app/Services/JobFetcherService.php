<?php

namespace App\Services;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class JobFetcherService
{
    public function fetchAndStore(string $what = 'developer', string $where = 'London', int $resultsPerPage = 20): void
    {
        $appId = config('services.adzuna.id');
        $appKey = config('services.adzuna.key');

        if (empty($appId) || empty($appKey)) {
            Log::error('Adzuna API credentials are not set in config/services.php');
            return;
        }

        $response = Http::get("https://api.adzuna.com/v1/api/jobs/gb/search/1", [
            'app_id' => $appId,
            'app_key' => $appKey,
            'results_per_page' => $resultsPerPage,
            'what' => $what,
            'where' => $where,
            'content-type' => 'application/json',
        ]);

        if ($response->failed()) {
            Log::error('Failed to fetch jobs from Adzuna API', ['status' => $response->status(), 'response' => $response->body()]);
            return;
        }

        $jobsData = $response->json()['results'] ?? [];

        foreach ($jobsData as $jobData) {
            // Create or find the Employer
            $employer = Employer::firstOrCreate(
                ['name' => $jobData['company']['display_name'] ?? 'Unknown Company'],
                // Add any other default employer fields here if necessary
            );

            // Prepare job attributes
            $jobAttributes = [
                'employer_id' => $employer->id,
                'title' => $jobData['title'] ?? 'No Title',
                'description' => $jobData['description'] ?? 'No Description',
                'url' => $jobData['redirect_url'] ?? null,
                'location' => $jobData['location']['display_name'] ?? 'Unknown Location',
                'salary' => $jobData['salary_min'] ?? null,
                // Add other fields as needed, ensure they are fillable in Job model
            ];

            // Create or update the Job
            // Using 'url' as a unique identifier for jobs from Adzuna
            $job = Job::updateOrCreate(
                ['url' => $jobAttributes['url']],
                $jobAttributes
            );

            // Handle Tags
            $tagNames = [];
            if (isset($jobData['category']['tag'])) {
                $tagNames[] = $jobData['category']['tag'];
            }
            // Add more logic here to extract tags from description or title
            // For example:
            // if (isset($jobData['description'])) {
            //     // Simple example: extract words that look like tags
            //     preg_match_all('/\b(php|laravel|javascript|react|vue|developer)\b/i', $jobData['description'], $matches);
            //     $tagNames = array_merge($tagNames, array_map('strtolower', $matches[0]));
            // }

            $tagIds = [];
            foreach (array_unique($tagNames) as $tagName) {
                if (!empty($tagName)) {
                    $tag = Tag::firstOrCreate(['name' => $tagName]);
                    $tagIds[] = $tag->id;
                }
            }

            // Attach tags to the job
            if (!empty($tagIds)) {
                $job->tags()->sync($tagIds);
            }
        }

        Log::info('Jobs fetched and stored successfully from Adzuna API.');
    }
}
