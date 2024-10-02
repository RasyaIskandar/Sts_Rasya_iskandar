<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all(); // Assuming you have a Category model
        return view('siswas.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'siswas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|min:5',
            'asal_sekolah' => 'required|string|min:5',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|min:5',
            'tempat_lahir' => 'required|string|min:5',
            'email' => 'required|string|min:5',
            'foto' => 'required|mimes:png,jpg,jpeg|max:2048',
            'scan_kk' => 'required|mimes:png,jpg,jpeg|max:2048',
            'name_cat' => 'required|string|min:3' // Tambahkan name_cat ke validasi
        ]);
        
        $foto = $request->file('foto');
        $foto->storeAs('public/storage', $foto->hashName());
        
        $scan_kk = $request->file('scan_kk');
        $scan_kk->storeAs('public/storage', $scan_kk->hashName());
        
        $siswa = new Siswa();
        $siswa->nama_lengkap = $request->input('nama_lengkap');
        $siswa->asal_sekolah = $request->input('asal_sekolah');
        $siswa->tanggal_lahir = $request->input('tanggal_lahir');
        $siswa->alamat = $request->input('alamat');
        $siswa->tempat_lahir = $request->input('tempat_lahir');
        $siswa->email = $request->input('email');
        $siswa->foto = $foto->hashName();
        $siswa->scan_kk = $scan_kk->hashName();
        $siswa->name_cat = $request->input('name_cat'); // Set nilai name_cat
        $siswa->save();
        

        return redirect()->route('siswas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
