<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function store(Request $request)
    {
        $store = new Navbar;
        $store->ref = $request->ref;
        $store->logo = $request->logo;
        $store->name =$request->name;
        $store->save();
        return redirect('/');
    }
    public function show($id){
        $show = Navbar::find($id);
        return view('back-office.show.bo_navbar_show', compact('show'));
    }
    public function edit($id){
        $edit = Navbar::find($id);
        return view('back-office.edit.bo_navbar_edit', compact('edit'));
    }
    public function update($id, Request $request){
        $update = Navbar::find($id);
        $update->ref = $request->ref;
        $update->logo = $request->logo;
        $update->name =$request->name;
        $update->save();
        return redirect('/navbar/administration/'.$id.'/show');
    }
    public function destroy($id){
        $destroy = Navbar::find($id);
        $destroy->delete();
        return redirect('/home/administration');
    }
}
