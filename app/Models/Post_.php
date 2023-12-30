<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-petama",
            "author" => "Raihan Ahmad F",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus deserunt odio ipsa inventore, id, veritatis accusantium porro quas quaerat, sed adipisci. Excepturi, nulla nam! Quae exercitationem ex explicabo adipisci dicta molestiae perferendis delectus, architecto repudiandae quisquam! Asperiores pariatur consequuntur, placeat velit error delectus eius laboriosam autem provident ratione. Delectus laborum odit maiores magni debitis magnam odio sequi repudiandae libero, corrupti explicabo, ipsam rem autem tempore incidunt? Unde laboriosam, recusandae dignissimos tempore excepturi sunt nesciunt corporis ut laudantium delectus magni libero necessitatibus quod quia distinctio voluptatibus molestiae ratione tenetur. Architecto, similique!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Raihan A F",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus deserunt odio ipsa inventore, id, veritatis accusantium porro quas quaerat, sed adipisci. Excepturi, nulla nam! Quae exercitationem ex explicabo adipisci dicta molestiae perferendis delectus, architecto repudiandae quisquam! Asperiores pariatur consequuntur, placeat velit error delectus eius laboriosam autem provident ratione. Delectus laborum odit maiores magni debitis magnam odio sequi repudiandae libero, corrupti explicabo, ipsam rem autem tempore incidunt? Unde laboriosam, recusandae dignissimos tempore excepturi sunt nesciunt corporis ut laudantium delectus magni libero necessitatibus quod quia distinctio voluptatibus molestiae ratione tenetur. Architecto, similique! m provident ratione. Delectus laborum odit maiores magni debitis magnam odio sequi repudiandae libero, corrupti explicabo, ipsam rem autem tempore incidunt? Unde laboriosam, recusandae dignissimos tempore excepturi sunt nesciunt corporis ut laudantium delectus magni libero necessitatibus quod quia distinctio"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug); //pengganti yg di komen di baris 30-35
    }
}
