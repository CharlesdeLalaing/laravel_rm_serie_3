<?php

namespace App\Http\Controllers;

use App\Models\Portofolio_grid;
use Illuminate\Http\Request;

class PortofolioGridController extends Controller
{
    public function create()
    {
        return view('back-office.create.bo_portofolio_grid_create');
    }

    public function store(Request $request)
    {
        $store = new Portofolio_grid;
        $store->class_name = $request->class_name;
        $store->data_category = $request->data_category;
        $store->data_target = $request->data_target;
        $store->display = $request->display;
        $store->name = $request->name;
        $store->save();
        return redirect('/home/administration');
    }
    public function show($id){
        $show = Portofolio_grid::find($id);
        return view('back-office.show.bo_portofolio_grid_show', compact('show'));
    }
    public function edit($id){
        $edit = Portofolio_grid::find($id);
        return view('back-office.edit.bo_portofolio_grid_edit', compact('edit'));
    }
    public function update($id, Request $request){
        $update = Portofolio_grid::find($id);
        $update->class_name = $request->class_name;
        $update->data_category = $request->data_category;
        $update->data_target = $request->data_target;
        $update->display = $request->display;
        $update->name = $request->name;
        $update->save();
        return redirect('/portofolio-grid/administration/'.$id.'/show');
    }
    public function destroy($id){
        $destroy = Portofolio_grid::find($id);
        $destroy->delete();
        return redirect('/home/administration');
    }
}
