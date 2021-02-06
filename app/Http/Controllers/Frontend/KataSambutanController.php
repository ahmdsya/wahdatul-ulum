<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KataPengantar;

class KataSambutanController extends Controller
{
    public function index($id)
    {
    	$judul = 'Kata Sambutan / Pengantar';
    	$kata = KataPengantar::where('id', $id)->first();

    	return view('frontend.kata-sambutan.index', compact('judul', 'kata'));
    }
}
