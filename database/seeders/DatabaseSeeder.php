<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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

        User::create([
            'name' => 'admin',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'name' => 'superadmin',
            'password' => bcrypt('superadmin321')
        ]);
    }
}
