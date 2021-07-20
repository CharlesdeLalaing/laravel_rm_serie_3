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

class HomeController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $services = Service::all();
        $portofolios = Portofolio::all();
        $contacts = Contact::all();
        $headerLogos = Header_logo::all();
        $navbars = Navbar::all();
        $portofolio_grids = Portofolio_grid::all();
        $footers = Footer::all();
        return view('home', compact('abouts', 'services', 'portofolios', 'contacts', 'headerLogos', 'navbars','portofolio_grids', 'footers'));
    }
}
