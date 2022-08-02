<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        return view('about')
            ->with('name', setting('blog.author.name'))
            ->with('job_title', setting('blog.author.job_title'))
            ->with('bio', setting('blog.author.bio'));
    }
}
