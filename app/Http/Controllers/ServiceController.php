<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        return view('back-office.create.bo_service_create');
    }
    public function store(Request $request){
        $store = new Service;
        $store->icon_service = $request->icon_service;
        $store->title_card = $request->title_card;
        $store->description_card = $request->description_card;
        $store->save();
        return redirect('/home/administration');
    }
    public function show($id){
        $show = Service::find($id);
        return view('back-office.show.bo_service_show', compact('show'));
    }
    public function edit($id){
        $edit = Service::find($id);
        return view('back-office.edit.bo_service_edit', compact('edit'));
    }
    public function update($id, Request $request){
        $update = Service::find($id);
        $update->icon_service = $request->icon_service;
        $update->title_card = $request->title_card;
        $update->description_card = $request->description_card;
        $update->save();
        return redirect('/service/administration/'.$id.'/show');
    }
    public function destroy($id){
        $destroy = Service::find($id);
        $destroy->delete();
        return redirect('/home/administration');
    }
}
