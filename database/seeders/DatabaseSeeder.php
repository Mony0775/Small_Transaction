<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789', ['rounds' => 10]),
            'company' => 'Admin',
            'job_title' => 'Admin',
            'phone_number' => '0123456789',
            'image' => '1680705313.messages-3.jpg',
            'role_as' => '1'
        ]);
        \App\Models\User::create( [
            'name' => 'Normal User',
            'email' => 'user@user.com',
            'password' => Hash::make('123456789', ['rounds' => 10]),
            'company' => 'Normal User',
            'job_title' => 'Normal User',
            'phone_number' => '0123456789',
            'image' => '1680711104.news-3.jpg',
            'role_as' => '0'
        ]);

    }
}
