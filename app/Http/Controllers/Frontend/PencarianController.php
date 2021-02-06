<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KataPengantar;
use App\Artikel;

class PencarianController extends Controller
{
    public function cari(Request $request)
    {
    	$judul = 'Pencarian';
    	$cari = $request->cari;

    	$getArtikel = Artikel::where('judul', 'like', "%".$cari."%")
    	->orWhere('bagian', 'like', "%".$cari."%")
    	->get();

    	$getPengantar = KataPengantar::where('judul', 'like', "%".$cari."%")
    	->orWhere('tokoh', 'like', "%".$cari."%")
    	->get();

    	return view('frontend.cari.index', compact('getArtikel','getPengantar', 'judul', 'cari'));
    }
}
