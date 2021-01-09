<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class AuthorController extends Controller
{
    public function show($id) {
        $author = User::find($id);
        $posts = Post::where('author', '=', $id)->get();
        return view('author', ['author' => $author->name, 'posts' => $posts]);
    }
}
