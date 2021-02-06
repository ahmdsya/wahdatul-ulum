<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;
use App\Bagian;

class ArtikelController extends Controller
{
    public function artikelByBagian($bagian)
    {
    	$judul = $bagian;
    	$artikel = Artikel::where('bagian', $bagian)->get();
    	$getbagian = Bagian::orderBy('id', 'asc')->get();
    	$bagian = Bagian::where('bagian', $bagian)->first();

    	return view('frontend.artikel.perbagian', compact('judul', 'artikel', 'getbagian', 'bagian'));
    }

    public function artikelSingle($id, $title)
    {
    	$judul = $title;
    	$artikel = Artikel::where([
    		['id', $id],
    		['judul', $title]
    	])->first();

    	$getbagian = Bagian::where('bagian', $artikel->bagian)->first();

    	return view('frontend.artikel.single', compact('judul', 'artikel', 'getbagian'));

    }

    public function artikelAll()
    {
        $judul = 'Daftar Artikel';
        $artikel = Artikel::all();

        return view('frontend.artikel.semua', compact('judul', 'artikel'));
    }
}
