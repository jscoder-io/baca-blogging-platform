<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list(Request $request)
    {
        $posts = (new Post)->latest()->paginate(5);

        return view('post.list')->with('posts', $posts);
    }

    public function view(Request $request, $slug)
    {
        $post = (new Post)->where('slug', $slug)->first();

        if (! $post) {
            abort(404);
        }

        return view('post.view')
            ->with('post', $post)
            ->with('prev', $post->getPrev())
            ->with('next', $post->getNext());
    }
}
