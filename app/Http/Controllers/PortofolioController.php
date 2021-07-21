<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function store(Request $request){
        $store = new Portofolio;
        $store->data_filter = $request->data_filter;
        $store->filter = $request->filter;
        $store->save();
        return redirect('/home/administration');
    }
    public function show($id){
        $show = Portofolio::find($id);
        return view('back-office.show.bo_portofolio_show', compact('show'));
    }
    public function edit($id){
        $edit = Portofolio::find($id);
        return view('back-office.edit.bo_portofolio_edit', compact('edit'));
    }
    public function update($id, Request $request){
        $update = Portofolio::find($id);
        $update->data_filter = $request->data_filter;
        $update->filter = $request->filter;
        $update->save();
        return redirect('/portofolio/administration/'.$id.'/show');
    }
    public function destroy($id){
        $destroy = Portofolio::find($id);
        $destroy->delete();
        return redirect('/home/administration');
    }
}
