<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Slider;

class AdminsliderController extends Controller
{
    public function index()
    {
        $images = Slider::all();
        return view('adminlayout.pages.slider', compact('images'));
    }

    public function store(Request $request)
    {
        $imagePath = $request->file('slider-image')->store('public/sliders');

        $slider = new Slider;
        $slider->image = str_replace('public/', '', $imagePath);
        $slider->save();

        return redirect()->back()->with('success', 'Slider image uploaded successfully.');
    }
    public function delete($id)
    {
        $slider = Slider::findOrFail($id);
        Storage::delete('public/' . $slider->image);
        $slider->delete();

        return redirect()->back()->with('success', 'Slider image deleted successfully.');
    }



}