<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class MailboxController extends Controller
{
    public function index()
    {
        $mails = Email::all();

        return view('adminlayout.pages.mailbox.mailbox', compact('mails'));
    }
}
