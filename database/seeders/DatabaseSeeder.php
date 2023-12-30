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
        

        // User::create([
        //     'name' => 'Raihan Ahmad Fadilah',
        //     'email' => 'raihanafadilah.18@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Ahmad F',
        //     'email' => 'afadilah.18@gmail.com',
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
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia beatae delectus dolore enim saepe earum maiores non explicabo tempore reprehenderit perspiciatis debitis, ipsum assumenda laboriosam laborum magnam blanditiis adipisci nobis placeat.</p><p> Odio distinctio asperiores vero, eveniet rerum accusamus ullam eos earum quos delectus quibusdam doloremque nihil? Rerum sit distinctio deserunt dolorum quam modi aspernatur aperiam soluta eaque sapiente, atque quos quaerat facilis fugit in natus, expedita deleniti nam itaque veritatis qui impedit ex nihil. </p> <p>Esse, labore a quis nesciunt, consequatur cum aut optio modi minima excepturi vero odio! Iure vitae, atque obcaecati modi natus ea inventore debitis cum odio, nulla magni consequatur perspiciatis sunt dicta quisquam tempore quos possimus quibusdam corporis odit! Tenetur expedita nemo fugiat odit optio veritatis cum, amet, quis qui, illum necessitatibus. Voluptatum ducimus ab quae doloribus culpa. </p> <p> Soluta optio, velit ad neque inventore ea praesentium minima saepe culpa distinctio, accusamus quasi ipsa sit. Nesciunt doloribus aperiam aut inventore, necessitatibus, voluptas tempora quaerat perferendis vero soluta harum! Voluptatum earum cum qui illum autem modi non dolor ex quia architecto commodi, porro sapiente odit ducimus, nihil nostrum. Rerum ab alias quos recusandae, nam natus temporibus harum culpa molestias soluta assumenda ad officia. Qui expedita nemo est nam deleniti.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia beatae delectus dolore enim saepe earum maiores non explicabo tempore reprehenderit perspiciatis debitis, ipsum assumenda laboriosam laborum magnam blanditiis adipisci nobis placeat.</p><p> Odio distinctio asperiores vero, eveniet rerum accusamus ullam eos earum quos delectus quibusdam doloremque nihil? Rerum sit distinctio deserunt dolorum quam modi aspernatur aperiam soluta eaque sapiente, atque quos quaerat facilis fugit in natus, expedita deleniti nam itaque veritatis qui impedit ex nihil. </p> <p>Esse, labore a quis nesciunt, consequatur cum aut optio modi minima excepturi vero odio! Iure vitae, atque obcaecati modi natus ea inventore debitis cum odio, nulla magni consequatur perspiciatis sunt dicta quisquam tempore quos possimus quibusdam corporis odit! Tenetur expedita nemo fugiat odit optio veritatis cum, amet, quis qui, illum necessitatibus. Voluptatum ducimus ab quae doloribus culpa. </p> <p> Soluta optio, velit ad neque inventore ea praesentium minima saepe culpa distinctio, accusamus quasi ipsa sit. Nesciunt doloribus aperiam aut inventore, necessitatibus, voluptas tempora quaerat perferendis vero soluta harum! Voluptatum earum cum qui illum autem modi non dolor ex quia architecto commodi, porro sapiente odit ducimus, nihil nostrum. Rerum ab alias quos recusandae, nam natus temporibus harum culpa molestias soluta assumenda ad officia. Qui expedita nemo est nam deleniti.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia beatae delectus dolore enim saepe earum maiores non explicabo tempore reprehenderit perspiciatis debitis, ipsum assumenda laboriosam laborum magnam blanditiis adipisci nobis placeat.</p><p> Odio distinctio asperiores vero, eveniet rerum accusamus ullam eos earum quos delectus quibusdam doloremque nihil? Rerum sit distinctio deserunt dolorum quam modi aspernatur aperiam soluta eaque sapiente, atque quos quaerat facilis fugit in natus, expedita deleniti nam itaque veritatis qui impedit ex nihil. </p> <p>Esse, labore a quis nesciunt, consequatur cum aut optio modi minima excepturi vero odio! Iure vitae, atque obcaecati modi natus ea inventore debitis cum odio, nulla magni consequatur perspiciatis sunt dicta quisquam tempore quos possimus quibusdam corporis odit! Tenetur expedita nemo fugiat odit optio veritatis cum, amet, quis qui, illum necessitatibus. Voluptatum ducimus ab quae doloribus culpa. </p> <p> Soluta optio, velit ad neque inventore ea praesentium minima saepe culpa distinctio, accusamus quasi ipsa sit. Nesciunt doloribus aperiam aut inventore, necessitatibus, voluptas tempora quaerat perferendis vero soluta harum! Voluptatum earum cum qui illum autem modi non dolor ex quia architecto commodi, porro sapiente odit ducimus, nihil nostrum. Rerum ab alias quos recusandae, nam natus temporibus harum culpa molestias soluta assumenda ad officia. Qui expedita nemo est nam deleniti.</p>'
        // ]);
    }
}
