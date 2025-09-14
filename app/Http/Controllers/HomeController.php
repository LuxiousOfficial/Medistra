<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home', [
            'news' => News::latest('id')->paginate(6),
            'articles' => article::latest('id')->paginate(6)
        ]);
    }
}
