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
}
