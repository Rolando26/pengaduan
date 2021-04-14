<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Alert;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        $no = 1;
        return view('kategori.index',compact('kategori','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ket_kategori' => 'required'
        ]);

        $kategori = new Kategori;
        $kategori->ket_kategori = $request->ket_kategori;
        $kategori->save();
        Alert::success('Berhasil','Kategori Berhasil Ditambahkan');
        return redirect('kategori');
    }


    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit',compact('kategori'));
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
        $kategori = Kategori::find($id);
        $kategori->ket_kategori = $request->ket_kategori;
        $kategori->save();
        Alert::success('Berhasil','Kategori Berhasil Di edit');
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        Alert::success('Berhasil','Kategori Berhasil Di hapus');
        return redirect('kategori');
    }
}
