<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * List of tags sorted by creation date
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('tags')->with('tags', Tag::all());
    }

    /**
     * List of posts by tag slug
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function view(Request $request, $slug)
    {
        $tag = Tag::firstOrFailFromSlug($slug);

        return view('tags.list')
            ->with('name', $tag->name)
            ->with('posts', $tag->posts()->paginate(setting('blog.post.per_page')));
    }
}
