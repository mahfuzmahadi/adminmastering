<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComposemailController extends Controller
{
    public function index()
    {
        return view('adminlayout.pages.mailbox.compose');
    }
}
