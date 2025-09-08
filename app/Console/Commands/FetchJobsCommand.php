<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\JobFetcherService;

class FetchJobsCommand extends Command
{

    // TODO-Sort out your apis for it to work on table plus properly
    protected $signature = 'jobs:fetch';
    protected $description = 'Fetch jobs from API and update the database';

    public function handle()
    {
        app(JobFetcherService::class)->fetchAndStore();
        $this->info('Jobs updated successfully');
    }
}

