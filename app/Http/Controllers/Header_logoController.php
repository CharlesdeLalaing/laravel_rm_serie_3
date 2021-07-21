<?php

namespace App\Http\Controllers;

use App\Models\Header_logo;
use Illuminate\Http\Request;

class Header_logoController extends Controller
{
    public function create(){
        return view('back-office.create.bo_home_create');
    }
    public function store(Request $request){
        $store = new Header_logo;
        $store->name = $request->name;
        $store->logo = $request->logo;
        $store->save();
        return redirect('/home/administration');
    }
    public function show($id){
        $show = Header_logo::find($id);
        return view('back-office.show.bo_home_top_show', compact('show'));
    }
    public function edit($id){
        $edit = Header_logo::find($id);
        return view('back-office.edit.bo_top_edit', compact('edit'));
    }
    public function update($id, Request $request){
        $update = Header_logo::find($id);
        $update->name = $request->name;
        $update->logo = $request->logo;
        $update->save();
        return redirect('/top/administration/'.$id.'/show');
    }
    public function destroy($id){
        $destroy = Header_logo::find($id);
        $destroy->delete();
        return redirect('/home/administration');
    }
}
