<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Request $request)
    {
        return view('tags')->with('tags', Tag::all());
    }

    public function view(Request $request, $slug)
    {
        $tag = Tag::findFromSlug($slug);

        if (! $tag) {
            abort(404);
        }

        $posts = $tag->posts()->paginate(setting('blog.post.per_page'));

        return view('tags.list')
            ->with('name', $tag->name)
            ->with('posts', $posts);
    }
}
