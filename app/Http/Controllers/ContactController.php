<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
        return view('contact');
    }

    public function store(request $request)
    {
        $validateData = $request->validate([
            'customer' => 'required',
            'date' => 'required',
            'comment' => 'required',
        ]);

        $contactData = $validateData;
        unset($contactData['action']);
        Contact::create($contactData);

        Contact::create($validateData);
        return back()->with('success', 'Your form has been successfully submitted, and we will get back to you shortly.');
    }

}