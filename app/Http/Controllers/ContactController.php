<?php

namespace App\Http\Controllers;

use App\Mail\ThankYouMail;
use App\Models\ContactsMe;
use App\Notifications\NewContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);

        $message = ContactsMe::create([
            'name' => $request->name,
            'email' => $validatedData['email'],
            'typeOfProject' => $request->typeOfProject,
            'budget' => $request->budget,
            'details' => $request->details,
        ]);
       // Mail::to( $validatedData['email'])->send(new ThankYouMail($message));

        Notification::route('mail',$validatedData['email'])->route('slack', config('services.slack.contact'))->notify(new NewContactNotification($message,$validatedData['email']));

    }

}
