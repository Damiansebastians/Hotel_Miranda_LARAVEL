<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Ramsey\Uuid\Uuid;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        if (filter_var($request->contact)) {

            $contact = new Contact();

            $contact->_id = Uuid::uuid4()->toString();
            $contact->customer = trim(htmlspecialchars($request->customer));
            $contact->date = Carbon::now()->toString();
            $contact->email = trim(htmlspecialchars($request->email));
            $contact->contact = trim(htmlspecialchars($request->contact));
            $contact->comment = trim(htmlspecialchars($request->comment));
            $contact->action = "Active";

            $contact->save();

            return redirect()->back()->with('success', 'Your form has been successfully submitted, and we will get back to you shortly');
        } else {
            return redirect()->back()->with('error', 'Invalid inputs');
        }
    }
}