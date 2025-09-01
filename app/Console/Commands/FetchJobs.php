<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Job;

class FetchJobs extends Command
{
    protected $signature = 'jobs:fetch';
    protected $description = 'Fetch jobs from Adzuna API and store in database';

    public function handle()
    {
        $app_id = env('d70ffebf');
        $app_key = env('9453788670f2dfa4ea38d3598bd2b064');

        $response = Http::get("https://api.adzuna.com/v1/api/jobs/gb/search/1", [
            'app_id' => $app_id,
            'app_key' => $app_key,
            'results_per_page' => 20,
            'what' => 'developer',
            'where' => 'London'
        ]);

        $jobs = $response->json()['results'] ?? [];

        foreach ($jobs as $jobData) {
            Job::updateOrCreate(
                ['adzuna_id' => $jobData['id']],
                [
                    'title' => $jobData['title'],
                    'company' => $jobData['company']['display_name'] ?? null,
                    'location' => $jobData['location']['display_name'] ?? null,
                    'description' => $jobData['description'],
                    'url' => $jobData['redirect_url'],
                    'salary' => $jobData['salary_min'] ?? null,
                ]
            );
        }

        $this->info("Jobs fetched and stored successfully!");
    }
}
