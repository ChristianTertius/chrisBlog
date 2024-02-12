<?php

namespace App\Models;



class Post
{
  private static $blog_posts = [
    [
      "title" => "Judul Post Pertama",
      "slug" => "judul-post-pertama",
      "author" => "Chrsitain Tertius",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus suscipit ipsum quisquam vitae numquam in voluptatem temporibus officia accusamus dolore, beatae fugit nemo reprehenderit, deserunt repudiandae alias nulla, rem recusandae corporis optio! Laboriosam obcaecati quasi minus cumque quaerat, non quisquam eligendi fuga, quae possimus earum laudantium corporis? Minima ipsam voluptate perferendis molestias hic soluta laborum quo atque aliquam molestiae odit laudantium, sequi id unde nemo voluptatibus, error iure placeat sit eligendi itaque modi tempora est. Maiores ipsam itaque eaque quis.
			"
    ],

    [
      "title" => "Judul Post Kedua",
      "slug" => "judul-post-kedua",
      "author" => "Budi Santoso",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus suscipit ipsum quisquam vitae numquam in voluptatem temporibus officia accusamus dolore, beatae fugit nemo reprehenderit, deserunt repudiandae alias nulla, rem recusandae corporis optio! Laboriosam obcaecati quasi minus cumque quaerat, non quisquam eligendi fuga, quae possimus earum laudantium corporis? Minima ipsam voluptate perferendis molestias hic soluta laborum quo atque aliquam molestiae odit laudantium, sequi id unde nemo voluptatibus, error iure placeat sit eligendi itaque modi tempora est. Maiores ipsam itaque eaque quis. laudantium corporis? Minima ipsam voluptate perferendis molestias hic soluta laborum quo atque aliquam molestiae odit laudantium, sequi id unde nemo voluptatibus, error iure placeat sit eligendi itaque modi tempora est. Maiores ipsam itaque eaque quis
			"
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