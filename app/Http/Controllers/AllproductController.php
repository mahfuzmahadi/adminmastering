<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // import the Product model

class AllproductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // retrieve all products from the database

        return view('frontend.allproduct', compact('products'));
    }
}
