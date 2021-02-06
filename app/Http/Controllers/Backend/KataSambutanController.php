<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KataPengantar;
use Image;

class KataSambutanController extends Controller
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
        $judul = 'Kata Sambutan';
        $no = 1;
        $pengantar = KataPengantar::all();

        return view('backend.kata-sambutan.index', compact('judul', 'pengantar', 'no'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul = 'Tambah Kata Sambutan';

        return view('backend.kata-sambutan.tambah', compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = uniqid().'.'.$request->file('foto')->getClientOriginalExtension();
        $path = public_path('img');

        $upload = (string) Image::make($request->file('foto')
                ->getRealPath())
                ->resize(800, 896)
                ->save($path.'/'.$imageName);

        if (!$upload) {
            return redirect()->route('kata-sambutan.index')->with('gagal', 'Gagal mengapload foto');
        }else{
            $add = new KataPengantar;
            $add->judul = $request->judul;
            $add->isi = $request->isi;
            $add->deskripsi = $request->deskripsi;
            $add->foto = $imageName;
            $add->tokoh = $request->tokoh;
            $add->jabatan = $request->jabatan;
            $add->save();
        }
        return redirect()->route('kata-sambutan.index')->with('sukses', 'Berhasil menambahkan.');

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
        $judul = 'Ubah Kata Sambutan';
        $data = KataPengantar::find($id);

        return view('backend.kata-sambutan.ubah', compact('judul', 'data'));
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
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $update = KataPengantar::find($id);
            $imageName = uniqid().'.'.$request->file('foto')->getClientOriginalExtension();
            $path = public_path('img');
            $upload = (string) Image::make($request->file('foto')
                ->getRealPath())
                ->resize(800, 896)
                ->save($path.'/'.$imageName);
            if ($upload) {
                unlink(public_path('img/'.$update->foto));
            }
            $update->judul = $request->judul;
            $update->isi = $request->isi;
            $update->deskripsi = $request->deskripsi;
            $update->tokoh = $request->tokoh;
            $update->jabatan = $request->jabatan;
            $update->foto = $imageName;
            $update->save();
        }else{
            $update = KataPengantar::find($id);
            $update->judul = $request->judul;
            $update->isi = $request->isi;
            $update->deskripsi = $request->deskripsi;
            $update->tokoh = $request->tokoh;
            $update->jabatan = $request->jabatan;
            $update->save();
        }

        return redirect()->back()->with('sukses', 'Berhasil di ubah.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = KataPengantar::find($id);
        if ($del->delete()) {
            unlink(public_path('img/'.$del->foto));
        }

        return redirect()->back()->with('sukses', 'Berhasil di hapus.');
    }
}
