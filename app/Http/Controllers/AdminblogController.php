<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminblogController extends Controller
{
    public function index()
    {
        

        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('adminlayout.pages.blogs', ['blogs' => $blogs]);
    }
}
