<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class programController extends Controller
{
    public function programindex(){
        return view('admin.program.index');
    }
}
