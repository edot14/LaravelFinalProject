<?php

namespace App\Console\Commands;

use App\Services\JobFetcherService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class FetchJobs extends Command
{
    protected $signature = 'jobs:fetch';
    protected $description = 'Fetch jobs from Adzuna API and store in database using JobFetcherService';

    protected JobFetcherService $jobFetcherService;

    public function __construct(JobFetcherService $jobFetcherService)
    {
        parent::__construct();
        $this->jobFetcherService = $jobFetcherService;
    }

    public function handle()
    {
        $this->info('Fetching jobs from Adzuna API...');

        try {
            // You can pass parameters to the service if you want to make the command more flexible
            // For example: $this->jobFetcherService->fetchAndStore($this->argument('what'), $this->argument('where'));
            $this->jobFetcherService->fetchAndStore();
            $this->info("Jobs fetched and stored successfully!");
        } catch (\Exception $e) {
            $this->error("An error occurred while fetching jobs: " . $e->getMessage());
            Log::error("Error fetching jobs: " . $e->getMessage(), ['exception' => $e]);
        }
    }
}