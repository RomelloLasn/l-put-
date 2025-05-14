<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Collect the form data
        $data = $request->only('name', 'email', 'phone', 'message');

        try {
            // Send the email
            Mail::to('romellolasn2@gmail.com')->send(new ContactFormMail($data));
            \Log::info('Email sent successfully.');

            // Return success message
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Log the error and return a failure message
            \Log::error('Email failed to send: ' . $e->getMessage());
            return back()->with('error', 'Failed to send your message. Please try again later.');
        }
    }
}