<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::with('user')->get();
        return Inertia::render('Posts/Index', ['posts' => $posts]);
    }

    public function store(Request $request){
        Post::create($request->all());
    }
}
