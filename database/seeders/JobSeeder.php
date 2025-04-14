<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Commenting this out to avoid duplicate entries as the tag is not importing correctly.
        //$tags = Tag::factory(3)->create();
            $tags = \App\Models\Tag::factory(3)->create();

            Job::factory(10)->hasAttached($tags)->create(new Sequence([
                'featured' => false,
                'schedule' => 'Full Time',
            ], [
                'featured' => true,
                'schedule' => 'Part Time',
            ]));
    }
}
