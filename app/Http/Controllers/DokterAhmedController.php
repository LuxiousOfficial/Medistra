<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DokterAhmedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Pasien $pasien)
    {
        if(!Gate::authorize('admin', $pasien)) {
            abort(403);
        }
        return view('/dokter/dr_adrianus/index', [
            'pasiens' => Pasien::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/dokter/dr_ahmed/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email:dns',
            'nik' => 'required',
            'jeniskelamin' => 'required',
            'tanggallahir' => 'required',
            'alamat' => 'required|max:200',
            'nohp' => 'required|max:13',
            'keterangan' => 'required',
            'poli' => 'required',
            'dokter' => 'required',
            'jadwal' => 'required'
        ]);

        Pasien::create($validatedData);
        return redirect('/dokter/dr_ahmed/create')->with('success', 'Anda berhasil melakukan booking dokter sesuai dengan jadwal yang anda tentukan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        if(!Gate::authorize('admin', $pasien)) {
            abort(403);
        }
        return view('/dokter/dr_ahmed/show', [
            'pasien' => $pasien
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        if(!Gate::authorize('admin', $pasien)) {
            abort(403);
        }
        return view('/dokter/dr_ahmed/edit', [
            'pasien' => $pasien
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        if(!Gate::authorize('admin', $pasien)) {
            abort(403);
        }
        $rules = [
            'nama' => 'required',
            'email' => 'required|email:dns|',
            'nik' => 'required',
            'jeniskelamin' => 'required',
            'tanggallahir' => 'required',
            'alamat' => 'required|max:200',
            'nohp' => 'required|max:13',
            'keterangan' => 'required',
            'poli' => 'required',
            'dokter' => 'required',
            'jadwal' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Pasien::where('id', $pasien->id)->update($validatedData);
        return redirect('/dokter/dr_ahmed')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        if(!Gate::authorize('admin', $pasien)) {
            abort(403);
        }
        Pasien::destroy($pasien->id);
        return redirect('/dokter/dr_ahmed')->with('success', 'Data berhasil dihapus');
    }
}
