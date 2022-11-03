<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Job::factory(6)->create();

        // Job::create([
        //     'title'=>'software developer',
        //     'tags'=>'php,laravel',
        //     'company'=>'Baba',
        //     'location'=>'Me apartment',
        //     'email'=>'lifa@gmail.com',
        //     'website'=>'https//google.com',
        //     'description'=>'telling something about this'
        // ]);

        // Job::create([
        //     'title'=>'associate developer',
        //     'tags'=>'react,flutter',
        //     'company'=>'Bn Khalifa',
        //     'location'=>'Me apartment again',
        //     'email'=>'bn@gmail.com',
        //     'website'=>'https//google.com',
        //     'description'=>'telling something else about this'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
