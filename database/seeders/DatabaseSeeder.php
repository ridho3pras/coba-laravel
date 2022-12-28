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
        
        User::create([
            'name' => 'Ridho Tri Prasetyo',
            'username'=>'ridhotrip',
            'email' => 'ridho123@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(5)->create();

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

        

        Post::factory(100)->create();

        

        // User::create([
        //     'name' => 'Dicky',
        //     'email' => 'dicky123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore facilis tempora, modi perferendis nihil officiis quidem autem obcaecati laudantium laboriosam labore voluptate soluta neque ipsam at.',
        //     'body'  => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore facilis tempora, modi perferendis nihil officiis quidem autem obcaecati laudantium laboriosam labore voluptate soluta neque ipsam at. </p> <p> Reprehenderit, aspernatur nostrum voluptate quidem eum, natus consequuntur maiores possimus, tempore architecto nemo nesciunt aliquid eligendi totam repellendus quisquam itaque dolorum alias dolores numquam sed neque quaerat odio temporibus. Eaque, voluptatibus.</p> <p> Vitae minus exercitationem, enim esse harum quas laborum porro laudantium repellendus, sunt voluptatibus magnam. Voluptatum beatae accusantium harum cum quasi porro quisquam corporis earum sunt saepe repudiandae reprehenderit consequuntur voluptas debitis, voluptatem ratione quod, necessitatibus sapiente soluta architecto vel ipsum exercitationem. </p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore facilis tempora, modi perferendis nihil officiis quidem autem obcaecati laudantium laboriosam labore voluptate soluta neque ipsam at.',
        //     'body'  => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore facilis tempora, modi perferendis nihil officiis quidem autem obcaecati laudantium laboriosam labore voluptate soluta neque ipsam at. </p> <p> Reprehenderit, aspernatur nostrum voluptate quidem eum, natus consequuntur maiores possimus, tempore architecto nemo nesciunt aliquid eligendi totam repellendus quisquam itaque dolorum alias dolores numquam sed neque quaerat odio temporibus. Eaque, voluptatibus.</p> <p> Vitae minus exercitationem, enim esse harum quas laborum porro laudantium repellendus, sunt voluptatibus magnam. Voluptatum beatae accusantium harum cum quasi porro quisquam corporis earum sunt saepe repudiandae reprehenderit consequuntur voluptas debitis, voluptatem ratione quod, necessitatibus sapiente soluta architecto vel ipsum exercitationem. </p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore facilis tempora, modi perferendis nihil officiis quidem autem obcaecati laudantium laboriosam labore voluptate soluta neque ipsam at.',
        //     'body'  => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore facilis tempora, modi perferendis nihil officiis quidem autem obcaecati laudantium laboriosam labore voluptate soluta neque ipsam at. </p> <p> Reprehenderit, aspernatur nostrum voluptate quidem eum, natus consequuntur maiores possimus, tempore architecto nemo nesciunt aliquid eligendi totam repellendus quisquam itaque dolorum alias dolores numquam sed neque quaerat odio temporibus. Eaque, voluptatibus.</p> <p> Vitae minus exercitationem, enim esse harum quas laborum porro laudantium repellendus, sunt voluptatibus magnam. Voluptatum beatae accusantium harum cum quasi porro quisquam corporis earum sunt saepe repudiandae reprehenderit consequuntur voluptas debitis, voluptatem ratione quod, necessitatibus sapiente soluta architecto vel ipsum exercitationem. </p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore facilis tempora, modi perferendis nihil officiis quidem autem obcaecati laudantium laboriosam labore voluptate soluta neque ipsam at.',
        //     'body'  => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore facilis tempora, modi perferendis nihil officiis quidem autem obcaecati laudantium laboriosam labore voluptate soluta neque ipsam at. </p> <p> Reprehenderit, aspernatur nostrum voluptate quidem eum, natus consequuntur maiores possimus, tempore architecto nemo nesciunt aliquid eligendi totam repellendus quisquam itaque dolorum alias dolores numquam sed neque quaerat odio temporibus. Eaque, voluptatibus.</p> <p> Vitae minus exercitationem, enim esse harum quas laborum porro laudantium repellendus, sunt voluptatibus magnam. Voluptatum beatae accusantium harum cum quasi porro quisquam corporis earum sunt saepe repudiandae reprehenderit consequuntur voluptas debitis, voluptatem ratione quod, necessitatibus sapiente soluta architecto vel ipsum exercitationem. </p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
