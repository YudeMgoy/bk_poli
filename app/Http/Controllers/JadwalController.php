<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JadwalPeriksa;

class JadwalController extends Controller
{
    public function index()
    {
    	$jadwal = JadwalPeriksa::get();
 
    	return view('jadwalperiksa',['jadwal' => $jadwal]);
    }

    public function tambah(){
        $dokter = DB::table('dokter')->get();
 
    	return view('tambahjadwalperiksa',['dokter' => $dokter]);
    }

    public function store(Request $request)
    {
        DB::table('jadwal_periksa')->insert([
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'id_dokter' => $request->id_dokter,
        ]);
        return redirect()->route('jadwalperiksa');
    
    }
}
