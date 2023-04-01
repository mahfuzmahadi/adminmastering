<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()

    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('frontend.blog', ['blogs' => $blogs]);
      
    }
 
    public function store(Request $request)
    
        {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required|max:250',
            ]);

            $blog = new Blog;
            $blog->title = $validatedData['title'];
            $blog->content = $validatedData['content'];
            $blog->author_name = auth()->user()->name;
            $blog->author_email = auth()->user()->email;
            $blog->save();

            return redirect()->back()->with('success', 'Blog created successfully.');
        }

}

