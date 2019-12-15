<?php

namespace Lee\Contact\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Lee\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::abc.contact');
    }

    public function postContact(Request $request)
    {
        Contact::create($request->all());
        return redirect()->back();
    }
}
