<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function index()
    {
        return view('adminlayout.pages.mailbox.mailbox');
    }
}
