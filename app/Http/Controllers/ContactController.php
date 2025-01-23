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

        $validated['privacy_policy'] = $request->has('privacy_policy');
        $validated['email_offers'] = $request->has('email_offers');

        Contact::create($validated);

        AdminContactLog::create($validated);

        $adminEmail = "admin@example.com";

        $details = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ];

        Mail::send('components.email', ['details' => $details], function ($message) use ($adminEmail) {
            $message->to($adminEmail)
                    ->subject('New Contact Us Message');
        });

        if (count(Mail::failures()) > 0) {
            \Log::error('Failed to send contact email', [
                'failures' => Mail::failures(),
                'request_data' => $validated,
            ]);
            return redirect()->back()->with('error', 'Your message was saved but failed to send email notification.');
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
