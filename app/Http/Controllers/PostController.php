<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function create(Request $req)
    {
        return view('post.create');
    }

    public function store(Request $req)
    {
        return Post::create($req->all());
    }

    public function update(Request $req, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($req->all());
        return $post;
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return 204;
    }
}
