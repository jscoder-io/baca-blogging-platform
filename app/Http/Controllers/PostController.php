<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * List of posts sorted by creation date
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        $posts = Post::latest()->paginate(setting('blog.post.per_page'));

        return view('post.list')->with('posts', $posts);
    }

    /**
     * View a post by slug
     *
     * @param  \Illuminate\Http\Request  $request
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function view(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post.view')
            ->with('post', $post)
            ->with('tags', $post->tags)
            ->with('prev', $post->getPrev())
            ->with('next', $post->getNext());
    }
}
