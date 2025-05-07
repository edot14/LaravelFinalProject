<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobRssController extends Controller // Extends - inherited from another class
{
    public function index()
    {
        $jobs = Job::latest()->take(20)->get();

        // Tells browsers/feed readers that this is an RSS feed
        // Ensures XML is parsed correctly.
        return response()
            ->view('rss.feed', ['jobs' => $jobs])
            ->header('Content-Type', 'application/rss+xml');
    }
}
