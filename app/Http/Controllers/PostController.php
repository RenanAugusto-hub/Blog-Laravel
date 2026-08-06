<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index () {
        $posts = Post::all();
        return view ('posts.index', compact('posts'));
    }

    public function create () {
        return view ('posts.create');
    }

    public function store (Request $request) {
        $post = new Post($request->all());

        $post->save();

        return redirect('posts');
    }

    public function edit ($id) {
        $post = Post::FindOrFail($id);

        return view ('posts.edit', compact('post'));
    }

    public function update (Request $request, $id) {
        $post = Post::FindOrFail($id);

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

        return redirect('posts');
    }

    public function show ($id) {
        $post = Post::FindOrFail($id);

        return view ('posts.show', compact('post'));
    }

    public function destroy ($id) {
        Post::destroy($id);

        return redirect('posts');
    }
}
