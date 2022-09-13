<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    /**
     * About blogger page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('about')
            ->with('name', setting('blog.author.name'))
            ->with('job_title', setting('blog.author.job_title'))
            ->with('bio', setting('blog.author.bio'))
            ->with('avatar', setting('blog.author.avatar'));
    }
}
