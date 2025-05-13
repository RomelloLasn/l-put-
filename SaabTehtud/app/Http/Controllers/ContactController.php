<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\View;

if (!View::exists('emails.contact')) {
    return 'The view [emails.contact] does not exist.';
}

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = $request->only('name', 'email', 'phone', 'message');

        // Send email using the Mailable class
        Mail::to('saabtehtud@online.ee')->send(new ContactFormMail($data));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}