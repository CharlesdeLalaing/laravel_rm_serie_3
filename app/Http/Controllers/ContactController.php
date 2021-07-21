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
    public function edit($id){
        $edit = Contact::find($id);
        return view('back-office.edit.bo_contact_edit', compact('edit'));
    }
    public function update($id, Request $request){
        $update = Contact::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->subject = $request->subject;
        $update->message = $request->message;
        $update->save();
        return redirect('/contact/administration/'.$id.'/show');
    }
    public function destroy($id){
        $destroy = Contact::find($id);
        $destroy->delete();
        return redirect('/home/administration');
    }
}
