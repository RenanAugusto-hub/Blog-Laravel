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
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Post::create($validated);

        return redirect('posts')->withSuccess('Novo Registro.');
    }

    public function edit ($id) {
        $post = Post::FindOrFail($id);

        return view ('posts.edit', compact('post'));
    }

    public function update (Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        
        $post = Post::findOrFail($id);
        $post->update($validated);

        return redirect('posts')->withSuccess('Atualizado Registro.');
    }

    public function show ($id) {
        $post = Post::FindOrFail($id);

        return view ('posts.show', compact('post'));
    }

    public function destroy ($id) {
        Post::destroy($id);

        return redirect('/posts');
    }
}
