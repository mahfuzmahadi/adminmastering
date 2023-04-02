<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Email;

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

        // Save the email data to the database
        $email = new Email();
        $email->sender = auth()->user()->email; // assuming the sender is the authenticated user
        $email->recipient = $to;
        $email->subject = $subject;
        $email->body = $body;
        $email->attachment = $request->file('attachment') ? $request->file('attachment')->getClientOriginalName() : null; // assuming the attachment is optional
        $email->save();

        return redirect()->back()->with('success', 'Email sent successfully.');
    }
}