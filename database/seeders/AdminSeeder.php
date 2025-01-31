<?php

namespace Database\Seeders;

use App\Models\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@example.com',
            'password' => '123456'
        ]);
    }
}
