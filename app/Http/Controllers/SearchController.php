<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karir;
use App\Models\Search;
use App\Models\Pelamar;
use App\Models\Officer;
use App\Models\Pasien;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        if($request->has('search')) {
            $search = Search::where('slug','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Search::all();
        }

        return view('/search', ['searches' => Search::filter(request(['search']))->latest('id')->paginate(12)]);
    }

    public function pasien(Request $request) {
        if($request->has('search')) {
            $search = pasien::where('nama','LIKE', '%' .$request->search. '%')
            ->orWhere('email', 'LIKE', '%' . $request->search . '%')
            ->orWhere('nik', 'LIKE', '%' . $request->search . '%')
            ->orWhere('poli', 'LIKE', '%' . $request->search . '%')
            ->orWhere('dokter', 'LIKE', '%' . $request->search . '%')
            ->orWhere('jadwal', 'LIKE', '%' . $request->search . '%')->get();
        }
        else{
            $search = pasien::latest('id')->get();
        }

        return view('/dashboard/pasien/index', ['pasiens' => Pasien::latest('id')->filter(request(['search']))->get()]);
    }

    public function karir(Request $request) {
        if($request->has('search')) {
            $search = Karir::where('jabatan','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Karir::latest('id')->get();
        }

        return view('/dashboard/karir/index', ['karirs' => Karir::latest('id')->filter(request(['search']))->get()]);
    }

    public function officer(Request $request) {
        if($request->has('search')) {
            $search = Officer::where('namalengkap','LIKE', '%' .$request->search. '%')
            ->orWhere('jabatan','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Officer::latest('id')->get();
        }

        return view('/dashboard/officer/index', ['officers' => officer::latest('id')->filter(request(['search']))->paginate(8)]);
    }

    public function user(Request $request) {
        if($request->has('search')) {
            $search = User::where('name','LIKE', '%' .$request->search. '%')
            ->orWhere('email','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = User::latest('id')->get();
        }

        return view('/dashboard/user/index', ['users' => User::latest('id')->filter(request(['search']))->get()]);
    }
}
