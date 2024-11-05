<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Konten;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function dashboard(){
        $konten = Konten::all();
        return view('admin.dashboard',compact('konten'));
    }
}
