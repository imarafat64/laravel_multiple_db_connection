<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function CreatePost()
    {
        $post = Post::create([
            "title" => "test",
            "body" => "test body"
        ]);

        return $post;
    }

    public function CreateProduct()
    {
        $product = Product::create([
            "name" => "test",
            "body" => "test body"
        ]);

        return $product;
    }
}
