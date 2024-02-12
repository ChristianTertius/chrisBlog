<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Christian Carlos',
            'username'=>'christiancarlos',
            'email' => 'chrsitain@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Budi Santoso',
        //     'email' => 'budisantoso@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]); 
        Post::factory(20)->create();


        // Post::create([
        //     'title'=> 'Judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'loremsfjaksdjfksajdmhurwyecvjasdfaskdlfasdjf',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porttitor dapibus nisi in posuere. Vivamus semper commodo magna, eu feugiat nisl suscipit in. Ut nec enim sagittis, mollis leo at, tempor ex. Phasellus sollicitudin eros quis urna dignissim lacinia. Mauris accumsan eros nec fringilla feugiat. Pellentesque nec venenatis mi. Sed suscipit neque vel ligula facilisis gravida. Praesent pharetra non erat ac elementum. Aliquam volutpat molestie ante. Nullam varius lacus sit amet tristique ultrices.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla augue',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title'=> 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'loremsfjaksdjfksajdmhurwyecvjasdfaskdlfasdjf',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porttitor dapibus nisi in posuere. Vivamus semper commodo magna, eu feugiat nisl suscipit in. Ut nec enim sagittis, mollis leo at, tempor ex. Phasellus sollicitudin eros quis urna dignissim lacinia. Mauris accumsan eros nec fringilla feugiat. Pellentesque nec venenatis mi. Sed suscipit neque vel ligula facilisis gravida. Praesent pharetra non erat ac elementum. Aliquam volutpat molestie ante. Nullam varius lacus sit amet tristique ultrices.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla augue',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title'=> 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'loremsfjaksdjfksajdmhurwyecvjasdfaskdlfasdjf',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porttitor dapibus nisi in posuere. Vivamus semper commodo magna, eu feugiat nisl suscipit in. Ut nec enim sagittis, mollis leo at, tempor ex. Phasellus sollicitudin eros quis urna dignissim lacinia. Mauris accumsan eros nec fringilla feugiat. Pellentesque nec venenatis mi. Sed suscipit neque vel ligula facilisis gravida. Praesent pharetra non erat ac elementum. Aliquam volutpat molestie ante. Nullam varius lacus sit amet tristique ultrices.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla augue',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'loremsfjaksdjfksajdmhurwyecvjasdfaskdlfasdjf',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porttitor dapibus nisi in posuere. Vivamus semper commodo magna, eu feugiat nisl suscipit in. Ut nec enim sagittis, mollis leo at, tempor ex. Phasellus sollicitudin eros quis urna dignissim lacinia. Mauris accumsan eros nec fringilla feugiat. Pellentesque nec venenatis mi. Sed suscipit neque vel ligula facilisis gravida. Praesent pharetra non erat ac elementum. Aliquam volutpat molestie ante. Nullam varius lacus sit amet tristique ultrices.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla augue',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
