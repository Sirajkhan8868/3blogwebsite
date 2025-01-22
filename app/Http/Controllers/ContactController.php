<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\AdminContactLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        set_time_limit(120);

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string',
            'privacy_policy' => 'required|boolean',
            'email_offers' => 'nullable|boolean',
        ]);

        Contact::create($validated);

        AdminContactLog::create($validated);

        $adminEmail = "admin@example.com";
        Mail::raw(
            "New Contact Us message received:\n\n" .
            "Name: {$validated['first_name']} {$validated['last_name']}\n" .
            "Email: {$validated['email']}\n" .
            "Phone: {$validated['phone']}\n" .
            "Subject: {$validated['subject']}\n" .
            "Message: {$validated['message']}\n",
            function ($message) use ($adminEmail) {
                $message->to($adminEmail)
                        ->subject('New Contact Us Message');
            }
        );

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
