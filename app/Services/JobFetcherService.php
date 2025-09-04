<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Job;

class JobFetcherService
{
    public function fetchAndStore()
    {
        $response = Http::get("https://api.adzuna.com/v1/api/jobs/gb/search/1", [
            "app_id" => env("d70ffebf"),
            "app_key" => env("9453788670f2dfa4ea38d3598bd2b064"),
            "results_per_page" => 20,
            "content-type" => "application/json"
        ]);

        $jobs = $response->json()["results"] ?? [];

        foreach ($jobs as $job) {
            Job::updateOrCreate(
                ['external_id' => $job['id']],
                [
                    'title' => $job['title'],
                    'company' => $job['company']['display_name'] ?? null,
                    'location' => $job['location']['display_name'] ?? null,
                    'salary' => $job['salary_min'] ?? null,
                    'url' => $job['redirect_url'] ?? null,
                ]
            );
        }
    }
}
