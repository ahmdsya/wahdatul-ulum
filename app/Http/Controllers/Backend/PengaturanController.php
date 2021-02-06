<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengaturan;

class PengaturanController extends Controller
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
        $judul = 'Pengaturan';
        $data = Pengaturan::find(1);

        return view('backend.pengaturan.index', compact('judul', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
            'favicon' => 'image|mimes:jpeg,png,jpg|max:1024',
        ]);

        if ($request->hasFile('logo')) {
            $imageName = 'logo.jpg';
            if (file_exists(public_path($imageName))) {
                unlink(public_path($imageName));
            }
            $request->file('logo')->move(public_path(), $imageName);
            $update = Pengaturan::find($id);
            $update->judul = $request->judul;
            $update->deskripsi = $request->deskripsi;
            $update->logo = $imageName;
            $update->save();
        }elseif ($request->hasFile('favicon')) {
            $imageName = 'favicon.png';
            if (file_exists(public_path($imageName))) {
                unlink(public_path($imageName));
            }
            $request->file('favicon')->move(public_path(), $imageName);
            $update = Pengaturan::find($id);
            $update->judul = $request->judul;
            $update->deskripsi = $request->deskripsi;
            $update->favicon = $imageName;
            $update->save();
        }else{
            $update = Pengaturan::find($id);
            $update->judul = $request->judul;
            $update->deskripsi = $request->deskripsi;
            $update->save();
        }

        return redirect()->back()->with('sukses', 'Berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
