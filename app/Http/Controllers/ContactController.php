<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $store = new Contact;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->subject = $request->subject;
        $store->message = $request->message;
        $store->save();
        return redirect('/');
    }
    public function show($id){
        $show = Contact::find($id);
        return view('back-office.show.bo_contact_show', compact('show'));
    }
}
