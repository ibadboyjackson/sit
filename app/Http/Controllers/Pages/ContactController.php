<?php

namespace App\Http\Controllers\Pages;

use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index() {

        return view('pages.contact');
    }

    public function postContact (ContactRequest $request) {
        $contact = new Contact();
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        $contact->save();
        Session::flash('success', 'Votre message a bien été enregistré, nous vous contacterons bientot. Merci');
        return redirect()->back();
    }
}
