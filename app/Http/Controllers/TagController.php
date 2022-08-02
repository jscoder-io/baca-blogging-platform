<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Request $request)
    {
        return view('tags');
    }
}
