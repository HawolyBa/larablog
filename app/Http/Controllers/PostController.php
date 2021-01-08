<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('allPosts');
    }
    
    public function show($id) {
        $postdata = [
            'id' => $id,
            'title' => 'Hello World',
            'body' => 'This is the first article of this database'
        ];

        return view('post', ['postdata' => $postdata]);
    }

    public function create(Request $request) {
        return view('addPost');
    }

    public function store(Request $request) {

    }
}
