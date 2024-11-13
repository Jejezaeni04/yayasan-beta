<?php

namespace App\Http\Controllers\kandidat;

use App\Http\Controllers\Controller;
use App\Models\Kandidat;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KandidatController extends Controller
{
    public function index(){
        $kandidat = Kandidat::all();
        return view('kandidat.dashboard',compact('kandidat'));
    }   

    public function addKandidat(){
        return view('kandidat.daftar');
    }

    public function store(Request $request){
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'votes_count' => 'nullable|integer',
            'bulan' => 'required|string|max:100',
            'tahun' => 'required|string|max:100',
            'nama_kandidat' => 'required|string|max:100',
            'email' => 'required|email|unique:kandidats,email',
            'foto_kandidat' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate file upload
            'pendidikan' => 'required|string|max:100',
            'pekerjaan' => 'required|string|max:100',
            'tinggi_badan' => 'required|string|max:10',
            'berat_badan' => 'required|string|max:10',
            'bahasa' => 'required|string|max:25',
            'kebudayaan' => 'required|string|max:25',
            'musik' => 'required|string|max:25',
            'pengetahuan' => 'required|string|max:25',
            'approve' => 'nullable|in:Proces,Tolak,Terima', // Make it nullable since it has a default value
        ]);

        // Handle file upload
        $path = $request->file('foto_kandidat')->store('uploads/kandidats', 'public'); // Store file in the public disk

        // Check if 'approve' is provided, if not, set it to 'Proces'
        $approve = $request->approve ?? 'Proces';

        // Create a new candidate record
        $kandidat=Kandidat::create([
            'user_id' => $request->user_id,
            'votes_count' => $request->votes_count ?? 0,  // Default to 0 if not provided
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'nama_kandidat' => $request->nama_kandidat,
            'email' => $request->email,
            'foto_kandidat' => $path,  // Store the path to the uploaded file
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'bahasa' => $request->bahasa,
            'kebudayaan' => $request->kebudayaan,
            'musik' => $request->musik,
            'pengetahuan' => $request->pengetahuan,
            'approve' => $approve, // Set the value of 'approve' (defaults to 'Proces')
        ]);
        Alert::success('success', 'Kamu Telah Mendaftar Sebagai Kandidat!');
        return redirect()->route('kandidat.dashboard');
    }
}
