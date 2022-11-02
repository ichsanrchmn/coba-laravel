<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ichsan Rachman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nisi iste amet minus recusandae assumenda quos eos dolorem et est quia adipisci eligendi aliquam molestias cum voluptatibus deleniti ut fuga expedita accusamus soluta quasi minima, possimus magni. Magni atque culpa reiciendis ut. Autem ad delectus aliquid, quo cumque alias repellendus veniam amet sed architecto ex debitis, quos aliquam dicta laudantium numquam cupiditate assumenda iure. Repudiandae illo id tempora! Vitae itaque fugit vero pariatur dolore perspiciatis id ut dignissimos, illo totam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit deserunt ipsum! Repellendus aspernatur a cumque magni itaque necessitatibus quas, eos quaerat quae, corrupti aut. Quis in dolorem, natus doloribus maxime voluptate architecto tempore explicabo ipsum amet praesentium. Odio molestias debitis exercitationem nisi, sapiente possimus eaque et cum molestiae reprehenderit ut aspernatur id optio distinctio. Alias aliquam atque itaque quasi! Qui, omnis laborum? Ipsum porro, ea labore eaque itaque totam tempore cum, laudantium eveniet at est molestias ex! Nisi delectus, labore aspernatur minima voluptas necessitatibus dolorum vero ullam commodi at pariatur error quidem aperiam suscipit, doloribus soluta in deserunt ipsum."
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
