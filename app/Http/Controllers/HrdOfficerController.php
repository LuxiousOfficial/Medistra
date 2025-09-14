<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class HrdOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Officer $officer)
    {
        Gate::authorize('admin', $officer);
        return view('/dashboard/officer/index', [
            'officers' => Officer::latest('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/dashboard/officer/create', [
            'karirs' => Karir::latest('id')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jabatan_id' => 'required',
            'email' => 'required|email:dns|unique:officers',
            'nik' => 'required|unique:officers',
            'namalengkap' => 'required|max:200',
            'tanggallahir' => 'required',
            'tempatlahir' => 'required|max:200',
            'jeniskelamin' => 'required',
            'alamat' => 'required|max:200',
            'agama' => 'required',
            'nohp' => 'required|max:13',
            'pasphoto' => 'required|image|mimes:jpeg,jpg,png|file|max:2000',
            'cv' => 'required|mimes:pdf|file|max:5000',
            'ijazah' => 'required|mimes:pdf|file|max:3000',
            'transkripnilai' => 'required|mimes:pdf|file|max:3000',
            'ktp' => 'required|image|mimes:jpeg,jpg,png|file|max:3000',
            'kk' => 'required|mimes:pdf|file|max:3000',
            'skck' => 'required|mimes:pdf|file|max:3000'
        ]);

        if($request->file('pasphoto')) {
            $validatedData['pasphoto'] = $request->file('pasphoto')->store('berkasastra-pasphoto');
        }

        if($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('berkasastra-cv');
        }

        if($request->file('ijazah')) {
            $validatedData['ijazah'] = $request->file('ijazah')->store('berkasastra-ijazah');
        }

        if($request->file('transkripnilai')) {
            $validatedData['transkripnilai'] = $request->file('transkripnilai')->store('berkasastra-transkripnilai');
        }

        if($request->file('ktp')) {
            $validatedData['ktp'] = $request->file('ktp')->store('berkasastra-ktp');
        }

        if($request->file('kk')) {
            $validatedData['kk'] = $request->file('kk')->store('berkasastra-kk');
        }

        if($request->file('skck')) {
            $validatedData['skck'] = $request->file('skck')->store('berkasastra-skck');
        }

        Officer::create($validatedData);
        return redirect('/dashboard/officer')->with('success', 'Data yang anda kirim berhasil tersimpan ke dalam database kami, Good Luck!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Officer $officer)
    {
        Gate::authorize('admin', $officer);
        return view('/dashboard/officer/show', [
            'officer' => $officer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Officer $officer)
    {
        Gate::authorize('admin', $officer);
        return view('/dashboard/officer/edit', [
            'officer' => $officer,
            'karirs' => Karir::latest('id')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Officer $officer)
    {
        Gate::authorize('admin', $officer);
        $rules = [
            'jabatan_id' => 'required',
            'namalengkap' => 'required|max:200',
            'tanggallahir' => 'required',
            'tempatlahir' => 'required|max:200',
            'jeniskelamin' => 'required',
            'alamat' => 'required|max:200',
            'agama' => 'required',
            'nohp' => 'required|max:13',
            'pasphoto' => 'required|image|mimes:jpeg,jpg,png|file|max:2000',
            'cv' => 'required|mimes:pdf|file|max:5000',
            'ijazah' => 'required|mimes:pdf|file|max:3000',
            'transkripnilai' => 'required|mimes:pdf|file|max:3000',
            'ktp' => 'required|image|mimes:jpeg,jpg,png|file|max:3000',
            'kk' => 'required|mimes:pdf|file|max:3000',
            'skck' => 'required|mimes:pdf|file|max:3000'
        ];

        if($request->email != $officer->email) {
            $rules['email'] = 'required|email:dns|unique:pelamars';
        }

        if($request->nik != $officer->nik) {
            $rules['nik'] = 'required|unique:pelamars';

        }

        $validatedData = $request->validate($rules);

        if($request->file('pasphoto')) {
            if($request->oldpasphoto) {
                Storage::delete($request->oldpasphoto);
            }
            $validatedData['pasphoto'] = $request->file('pasphoto')->store('berkasastra-pasphoto');
        }

        if($request->file('cv')) {
            if($request->oldcv) {
                Storage::delete($request->oldcv);
            }
            $validatedData['cv'] = $request->file('cv')->store('berkasastra-cv');
        }

        if($request->file('ijazah')) {
            if($request->oldijazah) {
                Storage::delete($request->oldijazah);
            }
            $validatedData['ijazah'] = $request->file('ijazah')->store('berkasastra-ijazah');
        }

        if($request->file('transkripnilai')) {
            if($request->oldtranskripnilai) {
                Storage::delete($request->oldtranskripnilai);
            }
            $validatedData['transkripnilai'] = $request->file('transkripnilai')->store('berkasastra-transkripnilai');
        }

        if($request->file('ktp')) {
            if($request->oldktp) {
                Storage::delete($request->oldktp);
            }
            $validatedData['ktp'] = $request->file('ktp')->store('berkasastra-ktp');
        }

        if($request->file('kk')) {
            if($request->oldkk) {
                Storage::delete($request->oldkk);
            }
            $validatedData['kk'] = $request->file('kk')->store('berkasastra-kk');
        }

        if($request->file('skck')) {
            if($request->oldskck) {
                Storage::delete($request->oldskck);
            }
            $validatedData['skck'] = $request->file('skck')->store('berkasastra-skck');
        }

        Officer::where('id', $officer->id)->update($validatedData);
        return redirect('/dashboard/officer')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Officer $officer)
    {
        Gate::authorize('admin', $officer);
        if($officer->pasphoto) {
            Storage::delete($officer->pasphoto);
        }
        if($officer->cv) {
            Storage::delete($officer->cv);
        }
        if($officer->ijazah) {
            Storage::delete($officer->ijazah);
        }
        if($officer->transkripnilai) {
            Storage::delete($officer->transkripnilai);
        }
        if($officer->ktp) {
            Storage::delete($officer->ktp);
        }
        if($officer->kk) {
            Storage::delete($officer->kk);
        }
        if($officer->skck) {
            Storage::delete($officer->skck);
        }
        Officer::destroy($officer->id);
        return redirect('/dashboard/officer')->with('success', 'Data berhasil dihapus');
    }
}
