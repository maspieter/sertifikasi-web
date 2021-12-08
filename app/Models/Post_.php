<?php

namespace App\Models;



class Post 
{
    static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Pieter Alvaro Bofiianno",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime,
            nisi fugiat at placeat alias illum sed neque voluptatibus reiciendis 
            corporis id autem, quas delectus iusto recusandae illo saepe optio
            possimus obcaecati itaque reprehenderit? Dolor fugiat omnis
            perferendis maiores mollitia harum error voluptas, quidem molestiae? 
            Minus optio illum eos unde, quae dolore labore sed? Assumenda non ipsum tempora cumque 
            aliquid consequuntur architecto iste iure? Velit porro ea, m
            voluptatum architecto itaque debitis sapiente enim voluptatem! 
            Tenetur fugit nisi explicabo unde."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bambang Pamungkas",
            "body" => "sssLorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime,
            nisi fugiat at placeat alias illum sed neque voluptatibus reiciendis 
            corporis id autem, quas delectus iusto recusandae illo saepe optio
            possimus obcaecati itaque reprehenderit? Dolor fugiat omnis
            perferendis maiores mollitia harum error voluptas, quidem molestiae? 
            Minus optio illum eos unde, quae dolore labore sed? Assumenda non ipsum tempora cumque 
            aliquid consequuntur architecto iste iure? Velit porro ea, m
            voluptatum architecto itaque debitis sapiente enim voluptatem! 
            Tenetur fugit nisi explicabo unde."  
        ]
    ];

    public static function all ()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
