<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductviewController extends Controller
{
    public function index()
    {
        return view('adminlayout.pages.shop.viewproduct');
    }
}
