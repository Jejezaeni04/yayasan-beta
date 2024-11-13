<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\Konten;
use Illuminate\Http\Request;

class landingpageController extends Controller
{
    public function index(){
        $konten = Konten::all();
        $kandidat = Kandidat::all();
        return view('landingpage',compact('konten','kandidat'));
    }
}
