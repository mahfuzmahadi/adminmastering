<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\Facades\Image;

class AddproductController extends Controller
{

    public function index()
    {
        return view('adminlayout.pages.shop.addproduct');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required',
            'name' => 'required',
            'stock' => 'required|integer',
            'details' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = new Product;
        $product->category = $request->input('category');
        $product->name = $request->input('name');
        $product->stock = $request->input('stock');
        $product->details = $request->input('details');

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('img/products/' . $filename);
            Image::make($image->getRealPath())->resize(400, 400)->save($path);
            $product->photo = $filename;
        }

        $product->save();

        return redirect('/submit_product')->with('success', 'Product has been added successfully');
    }

}
