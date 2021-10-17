<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Bintang Rajamuda',
            'email' => 'bintangrajamudaa@gmail.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Bintang Arridwan',
            'email' => 'bintang.arridwan8@gmail.com',
            'password' => bcrypt('456789')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programing'
        ]);
        Category::create([
            'name' => 'Android Mobile',
            'slug' => 'android-mobile'
        ]);

        Post::create([
            'title' => 'Web post pertama',
            'slug' => 'web-post-pertama',
            'excerpt' => 'Halo ini web post pertama',
            'body' => '<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p> <p>Quos saepe illum odio, ut perspiciatis ullam illo quidem tempora. Repellat, voluptatum.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Aandroid post pertama',
            'slug' => 'android-post-pertama',
            'excerpt' => 'Halo ini android post pertama',
            'body' => '<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p> <p>Quos saepe illum odio, ut perspiciatis ullam illo quidem tempora. Repellat, voluptatum.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
