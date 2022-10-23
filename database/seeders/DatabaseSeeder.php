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
            'slug' => 'web-development',
            'description' => 'Ea ipsum deserunt anim amet sint.',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'description' => 'Ullamco excepteur est ullamco dolor et adipisicing voluptate aliquip est in aliquip irure ad.',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
            'description' => 'Ipsum eu et aute fugiat in irure ad cupidatat minim laborum reprehenderit deserunt.',
        ]);
        Category::create([
            'name' => 'Flutter',
            'slug' => 'flutter',
            'description' => 'Officia consequat qui officia sunt non adipisicing mollit sit consequat ut incididunt.',
        ]);
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'description' => 'Et reprehenderit esse est pariatur in non ipsum sit incididunt.',
        ]);
        Category::create([
            'name' => 'React',
            'slug' => 'react',
            'description' => 'Veniam ipsum est duis incididunt dolor in labore anim labore culpa consequat.',
        ]);
        Category::create([
            'name' => 'PHP',
            'slug' => 'php',
            'description' => 'Amet laborum amet velit duis exercitation laboris deserunt fugiat enim proident enim et.',
        ]);

        User::factory(10)->create();
        Post::factory(100)->create();
    }
}
