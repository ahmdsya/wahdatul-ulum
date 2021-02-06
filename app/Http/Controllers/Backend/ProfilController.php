<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Auth;

class ProfilController extends Controller
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
        $judul = 'Profil';
        return view('backend.profil.index', compact('judul', 'admin'));
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
    public function update(Request $request, $id) //update profil
    {
        $admin = Admin::find($id);
        $admin->update($request->all());

        return redirect()->back()->with('sukses', 'Berhasil diubah.');
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

    public function updatePass(Request $request)
    {
        if (!(Hash::check($request->lama, Auth::user()->password))) {
            return redirect()->back()->with("gagal","Password lama tidak sesuai. Silakan coba lagi.");
        }
         
        if(strcmp($request->lama, $request->baru) == 0){
            return redirect()->back()->with("gagal","Password baru tidak boleh sama dengan password Anda saat ini. Silakan pilih password yang berbeda.");
        }
        if(!(strcmp($request->baru, $request->ulangi)) == 0){
            return redirect()->back()->with("gagal","Password baru harus sama dengan password yang Anda diulangi. Ketikkan ulang password baru.");
        }

        $user = Admin::find(Auth::user()->id);
        $user->password = bcrypt($request->baru);
        $user->save();
         
        return redirect()->back()->with("sukses","Password berhasil diubah !");
    }
}
