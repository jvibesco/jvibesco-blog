<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(2)->create();
        Post::factory(5)->create();
        // User::create([
        //     'name' => 'Jordan Vibesco',
        //     'email' => 'jvibesco@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Cia',
        //     'email' => 'cia@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // Category::create([
        //     'name' => 'Programming',
        //     'slug' => 'programming',
        // ]);

        // Category::create([
        //     'name' => 'Design',
        //     'slug' => 'design',
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ullam asperiores. Voluptates nobis corrupti, necessitatibus accusantium quos voluptate quidem.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ullam asperiores. Voluptates nobis corrupti, necessitatibus accusantium quos voluptate quidem. Reiciendis, iusto deserunt, obcaecati omnis sint quos minus fugiat nisi quae nihil natus blanditiis praesentium ab! Quam ab adipisci quasi officia suscipit sit fugit, dolor rem consequatur pariatur nisi perferendis ipsa corporis. </p> <p>Quod autem sint impedit eos, placeat eius ducimus, vero, itaque cumque sit nam recusandae modi veritatis fugit. Provident nobis, laborum aspernatur quia fugit omnis earum ducimus itaque nisi ipsum officiis sint officia hic? Doloremque perspiciatis consequatur, ratione sed quos quis fuga nesciunt tempore libero cumque? Nam voluptatum molestiae esse.</p>'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ullam asperiores. Voluptates nobis corrupti, necessitatibus accusantium quos voluptate quidem.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ullam asperiores. Voluptates nobis corrupti, necessitatibus accusantium quos voluptate quidem. Reiciendis, iusto deserunt, obcaecati omnis sint quos minus fugiat nisi quae nihil natus blanditiis praesentium ab! Quam ab adipisci quasi officia suscipit sit fugit, dolor rem consequatur pariatur nisi perferendis ipsa corporis. </p> <p>Quod autem sint impedit eos, placeat eius ducimus, vero, itaque cumque sit nam recusandae modi veritatis fugit. Provident nobis, laborum aspernatur quia fugit omnis earum ducimus itaque nisi ipsum officiis sint officia hic? Doloremque perspiciatis consequatur, ratione sed quos quis fuga nesciunt tempore libero cumque? Nam voluptatum molestiae esse.</p>'
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ullam asperiores. Voluptates nobis corrupti, necessitatibus accusantium quos voluptate quidem.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ullam asperiores. Voluptates nobis corrupti, necessitatibus accusantium quos voluptate quidem. Reiciendis, iusto deserunt, obcaecati omnis sint quos minus fugiat nisi quae nihil natus blanditiis praesentium ab! Quam ab adipisci quasi officia suscipit sit fugit, dolor rem consequatur pariatur nisi perferendis ipsa corporis. </p> <p>Quod autem sint impedit eos, placeat eius ducimus, vero, itaque cumque sit nam recusandae modi veritatis fugit. Provident nobis, laborum aspernatur quia fugit omnis earum ducimus itaque nisi ipsum officiis sint officia hic? Doloremque perspiciatis consequatur, ratione sed quos quis fuga nesciunt tempore libero cumque? Nam voluptatum molestiae esse.</p>'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ullam asperiores. Voluptates nobis corrupti, necessitatibus accusantium quos voluptate quidem.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ullam asperiores. Voluptates nobis corrupti, necessitatibus accusantium quos voluptate quidem. Reiciendis, iusto deserunt, obcaecati omnis sint quos minus fugiat nisi quae nihil natus blanditiis praesentium ab! Quam ab adipisci quasi officia suscipit sit fugit, dolor rem consequatur pariatur nisi perferendis ipsa corporis. </p> <p>Quod autem sint impedit eos, placeat eius ducimus, vero, itaque cumque sit nam recusandae modi veritatis fugit. Provident nobis, laborum aspernatur quia fugit omnis earum ducimus itaque nisi ipsum officiis sint officia hic? Doloremque perspiciatis consequatur, ratione sed quos quis fuga nesciunt tempore libero cumque? Nam voluptatum molestiae esse.</p>'
        // ]);
    }
}
