<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'is_admin' => false,
        ]);
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        User::factory(10)->create();
        Post::factory(20)->create();
    }
}
