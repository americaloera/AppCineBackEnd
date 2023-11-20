<?php

namespace Database\Seeders;

use App\Models\Director;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // php artisan db:seed --class=DirectorSeeder
        Director::create(['director_name' => 'Choi Seungcheol']);
        Director::create(['director_name' => 'Yoon Jenoghan']);
        Director::create(['director_name' => 'Hong Jisoo']);
        Director::create(['director_name' => 'Moon Junhui']);
        Director::create(['director_name' => 'Kwon Soonyoung']);
    }
}