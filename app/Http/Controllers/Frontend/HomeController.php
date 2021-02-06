<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bagian;
use App\Artikel;
use App\KataPengantar;

class HomeController extends Controller
{
    public function index()
    {
    	$judul = 'Beranda';
    	$artikel = Artikel::inRandomOrder()->limit(3)->get();
    	$sambutan = KataPengantar::all();

    	return view('frontend.home.index', compact('artikel', 'sambutan', 'judul'));
    }
}
