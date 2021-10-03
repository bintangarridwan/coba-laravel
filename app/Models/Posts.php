<?php

namespace App\Models;

class Posts
{
    private static $blog_posts = [
        [
            "title" => "Tulisan Pertama",
            "author" => "Rajamuda",
            "slug" => "tulisan-pertama",
            "body" => "Lorem ipsum dolor sit amet, 
        consectetur adipisicing elit. Ipsa voluptas necessitatibus 
        sapiente aut ad unde dolorum fugiat id, obcaecati, reiciendis, 
        delectus earum ab eum quia illo saepe minus quas excepturi."
        ],
        [
            "title" => "Tulisan kedua",
            "author" => "Bintang",
            "slug" => "tulisan-kedua",
            "body" => "Lorem ipsum dolor sit amet, 
        consectetur adipisicing elit. Ipsa voluptas necessitatibus 
        sapiente aut ad unde dolorum fugiat id, obcaecati, reiciendis, 
        delectus earum ab eum quia illo saepe minus quas excepturi."
        ]
    ];

    public static function all()
    {
        //menggunakan collections
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstwhere('slug', $slug);
    }
}
