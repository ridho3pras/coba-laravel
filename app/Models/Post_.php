<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Gempa Cianjur",
            "slug" => "gempa-cianjur",
            "author" => "Ridho",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, deleniti veritatis consectetur
             qui ratione aspernatur iure esse illo, modi cum ipsam vitae labore, voluptatem amet accusamus ad quia autem.
              Voluptas sed commodi saepe maxime. Suscipit, natus nostrum ut accusamus illum inventore dolorum? Nisi suscipit 
              eum error quasi deleniti consequatur debitis cumque natus vero sit, incidunt earum nostrum voluptates nesciunt 
              adipisci culpa aperiam. Possimus praesentium ratione tempora laborum eos neque vero soluta voluptatum itaque. 
              Nam qui esse eaque quam explicabo minus!"
        ],
        [
            "title" => "Gempa Palu",
            "slug" => "gempa-palu",
            "author" => "Febri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, deleniti veritatis consectetur
             qui ratione aspernatur iure esse illo, modi cum ipsam vitae labore, voluptatem amet accusamus ad quia autem.
              Voluptas sed commodi saepe maxime. Suscipit, natus nostrum ut accusamus illum inventore dolorum? Nisi suscipit 
              eum error quasi deleniti consequatur debitis cumque natus vero sit, incidunt earum nostrum voluptates nesciunt 
              adipisci culpa aperiam. Possimus praesentium ratione tempora laborum eos neque vero soluta voluptatum itaque. 
              Nam qui esse eaque quam explicabo minus!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();   
        return $posts->firstWhere('slug', $slug);
    }
}
