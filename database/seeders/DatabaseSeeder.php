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
     

     Post::factory(20)->create();

         User::create([
            'name' => 'Zaedan',
            'username' => 'Zaedan',
            'email' => 'zaedan@gmail.com',
            'password' => bcrypt('zaedan123')
        ]);

        User::factory(3)->create();

    //      User::create([
    //         'name' => 'Zaedan',
    //         'email' => 'zaedan@gmail.com',
    //         'password' => bcrypt('12345')
    //     ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing',
            
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',

        ]);


    //     Post::create([
    //         'title' => 'Judul Pertama',
    //         'slug' => 'judu-pertama',
    //         'excerpt' => 'Halo Zaedan',
    //         'body' => 'Belajar Programing',
    //         'category_id' => 1,
    //         'user_id' => 1,

    //     ]);

    //     Post::create([
    //         'title' => 'Judul Kedua',
    //         'slug' => 'judu-kedua',
    //         'excerpt' => 'Halo Zaedan2',
    //         'body' => 'Belajar Programing2',
    //         'category_id' => 1,
    //         'user_id' => 1,

    //     ]);

    //     Post::create([
    //         'title' => 'Judul Ketiga',
    //         'slug' => 'judu-ketiga',
    //         'excerpt' => 'Halo Zaedan3',
    //         'body' => 'Belajar Programing3',
    //         'category_id' => 2,
    //         'user_id' => 2,

    //     ]);


    }
}
