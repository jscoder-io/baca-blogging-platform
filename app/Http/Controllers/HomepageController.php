<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Home page with latest posts
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('homepage');
    }
}
