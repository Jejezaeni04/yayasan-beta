<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }
    public function vote(){
        return view('user.vote');
    }
    public function kandidat(){
        return view('user.daftarKandidat');
    }
}
