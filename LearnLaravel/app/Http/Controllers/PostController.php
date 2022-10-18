<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return view('articles', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findorFail($id);


        // $post = $posts[$id] ?? 'pas de titre';

        return view('article', compact('post'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $filename = time() . '.' . $request->avatar->extension();

        $request->avatar->storeAs('avatars', $request->title . '.' . 'jpg');
        die();

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    }
}