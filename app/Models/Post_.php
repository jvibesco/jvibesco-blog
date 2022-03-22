<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul_post_pertama",
            "author" => "Jordan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium non neque eligendi est. Velit excepturi accusamus ipsa facilis quisquam veniam assumenda aperiam modi ad iste, possimus accusantium delectus nulla sequi!"
        ], 
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul_post_kedua",
            "author" => "Cia",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium non neque eligendi est. Velit excepturi accusamus ipsa facilis quisquam veniam assumenda aperiam modi ad iste, possimus accusantium delectus nulla sequi!"
        ]
    ];

    public static function all() {
        return collect(self::$blog_post);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
