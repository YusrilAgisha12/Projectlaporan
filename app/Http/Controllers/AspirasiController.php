<?php

namespace App\Http\Controllers;

use App\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create.laporkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illumin aate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namalengkap' => 'required',
            'kelas' => 'required',
            'nomorhp' => 'required',
            'jeniskelamin' => 'required',
            'kategori' => 'required',
            'keluh' => 'required',
        ]);

        $aspirasi = new Aspirasi;
        $aspirasi->namalengkap = $request->namalengkap;
        $aspirasi->kelas = $request->kelas;
        $aspirasi->nomorhp = $request->nomorhp;
        $aspirasi->jeniskelamin = $request->jeniskelamin;
        $aspirasi->kategori = $request->kategori;
        $aspirasi->keluh = $request->keluh;
        $aspirasi->save();

        return redirect('/success')->with('status', 'Terima Kasih Laporan Anda Kami Tanggapan Silahkan Tunggu!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function show(Aspirasi $aspirasi)
    {
        
        $aspirasi = DB::table('suarasiswas')->get();  
        return view('success',compact('$aspirasi'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspirasi $aspirasi)
    {
        //
    }
}
