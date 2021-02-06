<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;
use App\Bagian;

class ArtikelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = 'Data Artikel';
        $artikel = Artikel::all();
        $no = 1;

        return view('backend.artikel.index', compact('judul', 'artikel', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul = 'Tambah Artikel';
        $bagian = Bagian::all();

        return view('backend.artikel.tambah', compact('judul', 'bagian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $add = new Artikel;
        $add->judul = $request->judul;
        $add->artikel = $request->artikel;
        $add->bagian = $request->bagian;
        $add->file = $request->file;
        $add->save();

        return redirect()->route('artikel.index')->with('sukses', 'Artikel berhasil di pubikasi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judul = 'Ubah Artikel';
        $artikel = Artikel::find($id);
        $bagian = Bagian::all();

        return view('backend.artikel.ubah', compact('judul', 'artikel', 'bagian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $add = Artikel::find($id);
        $add->judul = $request->judul;
        $add->artikel = $request->artikel;
        $add->bagian = $request->bagian;
        $add->file = $request->file;
        $add->save();

        return redirect()->back()->with('sukses', 'Artikel berhasil di ubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect()->back()->with('sukses', 'Artikel berhasil di hapus.');
    }
}
