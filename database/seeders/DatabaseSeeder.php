<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([ 
            'first_name' => 'Wail',
            'last_name'  => 'Abualela',
            'email'      => 'wailabualela@gmail.com',
            'password'   => bcrypt('Pass@2024#'),
        ]);

        $this->call(JobSeeder::class);
    }
}
