<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactModel;

class MyController extends Controller
{
    //
    public function index() {
        return view('frontend/index');
    }

    public function contact() {
        return view('frontend/contact');
    }

    public function save(Request $request) {
        $contact = new ContactModel();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->address = $request->input('address');
        $contact->city = $request->input('city');
        $contact->state = $request->input('state');
        $contact->save();

        return redirect('/contact')->with('Success', 'Message sent successfully');
        // return view('frontend/contact');
    }

    public function about() {
        return view('frontend/about');
    }

}
