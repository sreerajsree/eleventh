<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Newsletter;

class MainController extends Controller
{
    public function contact() {
        return view('pages.contact');
    }

    public function contactStore(Request $request) {
        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->company_email = $request->company_email;
        $contact->company_name = $request->company_name;
        $contact->company_website = $request->company_website;
        $contact->budget = $request->budget;
        $contact->message = $request->message;
        $contact->save();
        toastr()->success('The Team will get back to you', 'Success');
        return redirect()->back();
    }

    public function newsletterStore(Request $request) {
        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->save();
        toastr()->success('You are now subscribed', 'Success');
        return redirect()->back();
    }
}
