<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kandidat;
use Illuminate\Http\Request;

class homeVoteController extends Controller
{
    public function homeVote(){
        $perPage = 5; // Set the number of items per page
        $kandidat = Kandidat::paginate($perPage);
        return view('admin.vote.index', compact('kandidat'));
    }
}
