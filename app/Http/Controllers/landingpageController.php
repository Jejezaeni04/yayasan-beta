<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class landingpageController extends Controller
{
    public function index(){
        $konten = Konten::all();
        return view('landingpage',compact('konten'));
    }
}
