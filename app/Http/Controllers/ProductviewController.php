<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // import the Product model

class ProductviewController extends Controller
{
    public function index()
    {
        $products = Product::all(); // retrieve all products from the database

        return view('adminlayout.pages.shop.viewproduct', compact('products'));
    }
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }

}