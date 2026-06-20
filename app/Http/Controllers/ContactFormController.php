<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Mail\ContactMessage;
use App\Mail\CustomerAcknowledgment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactFormController
{
    public function sendContactForm(Request $request) {
        // 1. Form validation
        $data = $request->validate([
            'name' => 'required|string',
            'phone' => 'nullable|numeric',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($data);

        // 2. SMTP ke threw khud ko mail bhejna
        Mail::to('pradumanyadav514@gmail.com')->send(new ContactMessage($data));
        
        // 3. SMTP ke threw USER KO confirmation mail bhejna
        Mail::to($data['email'])->send(new CustomerAcknowledgment($data['name']));

        return response()->json(['status' => 'success', 'message' => 'Mail sent successfully!']);
    }
}
