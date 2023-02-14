<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Groups;
use Illuminate\Database\Seeder;
use App\Models\Passwork;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Passwork::factory(25)->create();
        User::factory(1)->create();
    }
}
