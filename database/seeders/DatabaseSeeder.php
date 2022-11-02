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
        
        // User::create([
            //     'name' => 'Ichsan Rachman',
            //     'email' => 'ichsanugraha@gmail.com',
            //     'password' => bcrypt('12345')
            // ]);
            
            // User::create([
                //     'name' => 'Doddy Ferdiansyah',
                //     'email' => 'doddyferdiansyah@gmail.com',
                //     'password' => bcrypt('12345')
                // ]);
        User::factory(3)->create();
                
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique iste voluptatem expedita',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique iste voluptatem expedita, impedit animi, repellat unde officia quos fuga vitae. Molestias hic veritatis, esse explicabo voluptatibus facere quibusdam quaerat molestiae rerum mollitia dolore eveniet dolorem. Quis nesciunt magni, incidunt optio esse reiciendis adipisci sequi sed sapiente minima laudantium illo quos consequuntur quidem saepe assumenda! Voluptates, cupiditate! Ea exercitationem obcaecati quis consectetur, molestias recusandae nostrum hic ad rem ab soluta nesciunt explicabo porro inventore consequuntur voluptatum et iusto dicta minima asperiores commodi, culpa est! Sequi neque veritatis quae facere id. Laboriosam praesentium quibusdam recusandae numquam natus unde voluptas minus similique.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique iste voluptatem expedita',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique iste voluptatem expedita, impedit animi, repellat unde officia quos fuga vitae. Molestias hic veritatis, esse explicabo voluptatibus facere quibusdam quaerat molestiae rerum mollitia dolore eveniet dolorem. Quis nesciunt magni, incidunt optio esse reiciendis adipisci sequi sed sapiente minima laudantium illo quos consequuntur quidem saepe assumenda! Voluptates, cupiditate! Ea exercitationem obcaecati quis consectetur, molestias recusandae nostrum hic ad rem ab soluta nesciunt explicabo porro inventore consequuntur voluptatum et iusto dicta minima asperiores commodi, culpa est! Sequi neque veritatis quae facere id. Laboriosam praesentium quibusdam recusandae numquam natus unde voluptas minus similique.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique iste voluptatem expedita',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique iste voluptatem expedita, impedit animi, repellat unde officia quos fuga vitae. Molestias hic veritatis, esse explicabo voluptatibus facere quibusdam quaerat molestiae rerum mollitia dolore eveniet dolorem. Quis nesciunt magni, incidunt optio esse reiciendis adipisci sequi sed sapiente minima laudantium illo quos consequuntur quidem saepe assumenda! Voluptates, cupiditate! Ea exercitationem obcaecati quis consectetur, molestias recusandae nostrum hic ad rem ab soluta nesciunt explicabo porro inventore consequuntur voluptatum et iusto dicta minima asperiores commodi, culpa est! Sequi neque veritatis quae facere id. Laboriosam praesentium quibusdam recusandae numquam natus unde voluptas minus similique.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique iste voluptatem expedita',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique iste voluptatem expedita, impedit animi, repellat unde officia quos fuga vitae. Molestias hic veritatis, esse explicabo voluptatibus facere quibusdam quaerat molestiae rerum mollitia dolore eveniet dolorem. Quis nesciunt magni, incidunt optio esse reiciendis adipisci sequi sed sapiente minima laudantium illo quos consequuntur quidem saepe assumenda! Voluptates, cupiditate! Ea exercitationem obcaecati quis consectetur, molestias recusandae nostrum hic ad rem ab soluta nesciunt explicabo porro inventore consequuntur voluptatum et iusto dicta minima asperiores commodi, culpa est! Sequi neque veritatis quae facere id. Laboriosam praesentium quibusdam recusandae numquam natus unde voluptas minus similique.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
