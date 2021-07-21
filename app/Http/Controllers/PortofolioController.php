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
}
