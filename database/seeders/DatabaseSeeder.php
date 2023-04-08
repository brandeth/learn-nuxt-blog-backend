<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// Import post and user classes
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(20)->create();

        // Find the first user with id 1 and change the name to Rey Garcia
        User::find(1)->update([
            'name' => 'Rey Garcia',
            'email' => 'rey@dev',
            'password' => bcrypt('password'),
        ]);
    }
}
