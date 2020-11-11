<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact () {
        $contacts = Contact::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.pages.contact.index', compact('contacts'));
    }

    public function message($id) {
        $contact = Contact::find($id);

        if($contact) {
            return view('admin.pages.contact.contact', compact('contact'));
        }
        return abort(404);
    }
}
