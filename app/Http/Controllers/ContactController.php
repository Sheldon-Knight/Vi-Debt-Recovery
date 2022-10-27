<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm\ContactRequest;
use App\Mail\contactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\Honeypot\SpamResponder\SpamResponder;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Mail::to(config('app.contact_form_email'))->send(new contactFormMail($request->validated()));
        
        return back()->with('success', "Thank You, We have recieved your message and wil get back to you as soon as possible...");
    }
}
