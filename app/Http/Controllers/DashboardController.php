<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karir;
use App\Models\Officer;
use App\Models\Pasien;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        return view('/dashboard/index', [
            'pasiens' => Pasien::count(),
            'careers' => Karir::count(),
            'candidates' => Officer::count(),
            'users' => User::count(),
        ]);
    }
}
