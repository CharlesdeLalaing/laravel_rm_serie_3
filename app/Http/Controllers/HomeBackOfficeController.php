<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Header_logo;
use App\Models\Navbar;
use App\Models\Portofolio;
use App\Models\Portofolio_grid;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeBackOfficeController extends Controller
{
    public function index(){
        $bo_abouts = About::all();
        $bo_services = Service::all();
        $bo_portofolios = Portofolio::all();
        $bo_contacts = Contact::all();
        $bo_headerLogos = Header_logo::all();
        $bo_navbars = Navbar::all();
        $bo_portofolio_grids = Portofolio_grid::all();
        $bo_footers = Footer::all();
        return view('back-office.pages.homeBackOffice', compact('bo_abouts', 'bo_services', 'bo_portofolios', 'bo_contacts', 'bo_headerLogos', 'bo_navbars','bo_portofolio_grids', 'bo_footers'));
    }
}
