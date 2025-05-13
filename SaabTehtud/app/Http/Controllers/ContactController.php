<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = $request->only('name', 'email', 'phone', 'message');

        // Send email
        Mail::send([], [], function ($message) use ($data) {
            $message->to('saabtehtud@online.ee')
                ->subject('New Contact Form Submission')
                ->setBody("
                    Name: {$data['name']}
                    Email: {$data['email']}
                    Phone: {$data['phone']}
                    Message: {$data['message']}
                ", 'text/plain');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}