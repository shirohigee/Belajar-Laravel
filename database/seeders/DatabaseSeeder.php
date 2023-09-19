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
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Faldy Gosal',
            'username' => 'faldygo',
            'email' => 'faldygo@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Andreas Gosal',
        //     'email' => 'andreasgo@gmail.com',
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
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ipsa! Odio minima hic, necessitatibus reiciendis fugiat, ullam quidem magnam eius cumque ratione sunt esse aperiam tempore perspiciatis accusantium? Repellat, adipisci.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus repudiandae atque quo excepturi consequatur impedit, mollitia at vitae natus fuga quod possimus maiores consectetur numquam animi obcaecati unde id minus nisi quisquam. Cum ipsum eaque cumque laborum quisquam, ipsa sequi doloribus illo saepe, optio distinctio sapiente quam nobis magni labore?Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore et in provident tempore necessitatibus voluptatem reprehenderit fuga, magnam reiciendis, dolorem quibusdam. Expedita maiores nostrum mollitia totam id. Quisquam saepe nemo tempora omnis minima. Quos doloremque dolores molestiae quo repellendus culpa eius consectetur, voluptatum eligendi blanditiis possimus architecto deleniti cupiditate nam nostrum veniam. Nesciunt tempora modi veritatis, voluptates officia magni doloribus? Soluta optio culpa expedita sint minus iste necessitatibus quod minima. Sed tempora in consectetur esse, perspiciatis asperiores temporibus qui provident porro aspernatur debitis id. Quis accusantium soluta temporibus deserunt, dolorum eum totam obcaecati, ad ullam, nostrum officiis adipisci recusandae aliquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ipsa! Odio minima hic, necessitatibus reiciendis fugiat, ullam quidem magnam eius cumque ratione sunt esse aperiam tempore perspiciatis accusantium? Repellat, adipisci.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus repudiandae atque quo excepturi consequatur impedit, mollitia at vitae natus fuga quod possimus maiores consectetur numquam animi obcaecati unde id minus nisi quisquam. Cum ipsum eaque cumque laborum quisquam, ipsa sequi doloribus illo saepe, optio distinctio sapiente quam nobis magni labore?Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore et in provident tempore necessitatibus voluptatem reprehenderit fuga, magnam reiciendis, dolorem quibusdam. Expedita maiores nostrum mollitia totam id. Quisquam saepe nemo tempora omnis minima. Quos doloremque dolores molestiae quo repellendus culpa eius consectetur, voluptatum eligendi blanditiis possimus architecto deleniti cupiditate nam nostrum veniam. Nesciunt tempora modi veritatis, voluptates officia magni doloribus? Soluta optio culpa expedita sint minus iste necessitatibus quod minima. Sed tempora in consectetur esse, perspiciatis asperiores temporibus qui provident porro aspernatur debitis id. Quis accusantium soluta temporibus deserunt, dolorum eum totam obcaecati, ad ullam, nostrum officiis adipisci recusandae aliquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ipsa! Odio minima hic, necessitatibus reiciendis fugiat, ullam quidem magnam eius cumque ratione sunt esse aperiam tempore perspiciatis accusantium? Repellat, adipisci.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus repudiandae atque quo excepturi consequatur impedit, mollitia at vitae natus fuga quod possimus maiores consectetur numquam animi obcaecati unde id minus nisi quisquam. Cum ipsum eaque cumque laborum quisquam, ipsa sequi doloribus illo saepe, optio distinctio sapiente quam nobis magni labore?Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore et in provident tempore necessitatibus voluptatem reprehenderit fuga, magnam reiciendis, dolorem quibusdam. Expedita maiores nostrum mollitia totam id. Quisquam saepe nemo tempora omnis minima. Quos doloremque dolores molestiae quo repellendus culpa eius consectetur, voluptatum eligendi blanditiis possimus architecto deleniti cupiditate nam nostrum veniam. Nesciunt tempora modi veritatis, voluptates officia magni doloribus? Soluta optio culpa expedita sint minus iste necessitatibus quod minima. Sed tempora in consectetur esse, perspiciatis asperiores temporibus qui provident porro aspernatur debitis id. Quis accusantium soluta temporibus deserunt, dolorum eum totam obcaecati, ad ullam, nostrum officiis adipisci recusandae aliquam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ipsa! Odio minima hic, necessitatibus reiciendis fugiat, ullam quidem magnam eius cumque ratione sunt esse aperiam tempore perspiciatis accusantium? Repellat, adipisci.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus repudiandae atque quo excepturi consequatur impedit, mollitia at vitae natus fuga quod possimus maiores consectetur numquam animi obcaecati unde id minus nisi quisquam. Cum ipsum eaque cumque laborum quisquam, ipsa sequi doloribus illo saepe, optio distinctio sapiente quam nobis magni labore?Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore et in provident tempore necessitatibus voluptatem reprehenderit fuga, magnam reiciendis, dolorem quibusdam. Expedita maiores nostrum mollitia totam id. Quisquam saepe nemo tempora omnis minima. Quos doloremque dolores molestiae quo repellendus culpa eius consectetur, voluptatum eligendi blanditiis possimus architecto deleniti cupiditate nam nostrum veniam. Nesciunt tempora modi veritatis, voluptates officia magni doloribus? Soluta optio culpa expedita sint minus iste necessitatibus quod minima. Sed tempora in consectetur esse, perspiciatis asperiores temporibus qui provident porro aspernatur debitis id. Quis accusantium soluta temporibus deserunt, dolorum eum totam obcaecati, ad ullam, nostrum officiis adipisci recusandae aliquam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
