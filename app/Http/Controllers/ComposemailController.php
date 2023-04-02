<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ComposemailController extends Controller
{
    public function index()
    {
        return view('adminlayout.pages.mailbox.compose');
    }

    public function sendMail(Request $request)
    {
        $to = $request->input('to');
        $subject = $request->input('subject');
        $body = $request->input('body');

        Mail::to($to)->send(new SendMail($subject, $body));

        return redirect()->back()->with('success', 'Email sent successfully.');
    }
}