<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function store(Request $request){
        $store = new About;
        $store->description_about = $request->description_about;
        $store->save();
        return redirect('/home/administration');
    }
    public function show($id){
        $show = About::find($id);
        return view('back-office.show.bo_about_show', compact('show'));
    }
}
