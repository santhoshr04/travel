<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    // Display Contact Form
    public function index() {
        return view('frontend.contactus.index');
    }

    // Handle Form Submission
    public function submit(Request $request) {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:5'
        ]);
    
        // Get form inputs
        $name = $request->input('name');
        $email = $request->input('email');
        $messageContent = $request->input('message');
    
        // Send email using Mailable
        Mail::to('hq@gccvirtual.com')->send(new ContactMail($name, $email, $messageContent));
    
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}