<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\JobFetcherService;

class FetchJobsCommand extends Command
{
    protected $signature = 'jobs:fetch';
    protected $description = 'Fetch jobs from API and update the database';

    public function handle()
    {
        app(JobFetcherService::class)->fetchAndStore();
        $this->info('Jobs updated successfully');
    }
}

