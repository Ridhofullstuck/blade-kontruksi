<?php

namespace App\Http\Controllers;

use App\Models\Kontruksi;
use Illuminate\Http\Request;

class kontruksicontroller extends Controller
{
    public function index()
    {
        return view('componen.home', [
            "title" => "Home"
        ]);
    }

    public function about()
    {
        return view('componen.about', [
            "title" => "About"
        ]);
    }

    public function galleri()
    {
        return view('componen.galleri', [
            "title" => "Galleri"
        ]);
    }

    public function contact()
    {
        return view('componen.contact', [
            "title" => "Contact",
        ]);
    }
}
