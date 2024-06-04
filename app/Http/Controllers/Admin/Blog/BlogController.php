<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\CMS\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{


    public function index()
    {
        $posts = Post::with(['author:id,name', 'category:id,name'])->get();

        return view('Pages.Blog.index', compact('posts'));
    }

    public function create()
    {
        $posts = Post::inRandomOrder()->limit(10)->get();
        
        return view('Pages.Blog.Create.index', compact('posts'));
    }
}
