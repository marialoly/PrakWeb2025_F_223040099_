<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 10 User secara manual dengan username user1-user10
        User::factory()->count(5)->create();

        // Membuat categories secara otomatis
        Category::factory(2)->create();

        // Membuat posts secara otomatis (akan otomatis assign ke user dan category yang ada)
        Post::factory(10)->recycle(User::all())->recycle(Category::all())->create();

    }
}
