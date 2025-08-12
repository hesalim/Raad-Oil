<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate + honeypot
        $data = $request->validate([
            'name'    => ['required','string','max:100'],
            'email'   => ['required','email','max:255'],
            'phone'   => ['nullable','string','max:50'],
            'message' => ['required','string','max:5000'],
            'trap'    => ['nullable','string','size:0'], // hidden field must stay empty
        ]);

        // Build the payload the mailable/email view expects
        $payload = [
            'name'    => $data['name'],
            'email'   => $data['email'],
            'phone'   => $data['phone'] ?? null,
            'message' => $data['message'],
        ];

        $to      = config('contact.to', 'hesalim10@gmail.com');
        $prefix  = config('contact.subject_prefix', '');
        $subject = trim(($prefix ? $prefix.' ' : '') . 'New contact form message');

        try {
            Mail::to($to)->send(
                (new ContactMessage($payload))
                    ->subject($subject)
                    ->replyTo($payload['email'], $payload['name']) // replies go to the visitor
            );

            return back()->with('status', 'Thanks! Your message has been sent.');
        } catch (\Throwable $e) {
            Log::error('Contact form email failed', ['error' => $e->getMessage()]);
            return back()->withErrors([
                'email' => 'Sorry, we could not send your message right now. Please try again later.'
            ])->withInput();
        }
    }
}
