<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CategoryController extends Controller
{
    public function show($name) {
        $posts = Post::where('category', '=', $name)->get();
        return view('category', ['category' => $name, 'posts' => $posts]);
    }
}
