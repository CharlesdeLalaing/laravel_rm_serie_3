<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function store(Request $request)
    {
        $store = new Footer;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->save();
        return redirect('/');
    }
    public function show($id){
        $show = Footer::find($id);
        return view('back-office.show.bo_footer_show', compact('show'));
    }
    public function edit($id){
        $edit = Footer::find($id);
        return view('back-office.edit.bo_footer_edit', compact('edit'));
    }
    public function update($id, Request $request){
        $update = Footer::find($id);
        $update->title = $request->title;
        $update->text = $request->text;
        $update->save();
        return redirect('/footer/administration/'.$id.'/show');
    }
    public function destroy($id){
        $destroy = Footer::find($id);
        $destroy->delete();
        return redirect('/home/administration');
    }
}
