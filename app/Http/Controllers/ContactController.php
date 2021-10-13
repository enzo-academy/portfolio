<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactConfirm(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return view('public/contact/confirm');
    }

    function contact()
    {
        return view('public/contact/contact');
    }

}
