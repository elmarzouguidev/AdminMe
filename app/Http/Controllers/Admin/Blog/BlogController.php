<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{


    public function index()
    {
        return view('Pages.Blog.index');
    }
}
