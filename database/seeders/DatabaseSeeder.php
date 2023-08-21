<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Pajar Padillah',
            'email' => 'pajar@gmail.com',
            'username' => 'pajar',
            'password' => '12345'
        ]);

        User::create([
            'name' => 'Cindy Yuniasaki',
            'email' => 'cindy@gmail.com',
            'username' => 'cindy',
            'password' => '12345'
        ]);

        Category::create([
            'name' => 'Birthday',
            'slug' => 'birthday'
        ]);

        Category::create([
            'name' => 'Traveling',
            'slug' => 'traveling'
        ]);

        Gallery::factory(5)->create();
        Blog::factory(5)->create();
    }
}
