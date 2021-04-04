<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirasi;
use App\Kategori;

class AdminAspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $aspirasi = Aspirasi::all();
        $kategori = Kategori::all();
        if($request->tanggal != null && $request->cari == true){
            $tanggal = $request->tanggal;
            $aspirasi = Aspirasi::where('created_at','LIKE',"$tanggal%")->get();
            if($request->kategori != null){
                $aspirasi = Aspirasi::where('created_at','LIKE',"$tanggal%")->where('kategori_id',$request->kategori)->get();
               
            }
        }elseif($request->kategori != null && $request->cari == true ){
            $aspirasi = Aspirasi::where('kategori_id',$request->kategori)->get();
        }
        
        $no = 1;
        return view('aspirasiadmin.index',compact('aspirasi','no','kategori'));
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
        $aspirasi = Aspirasi::find($id);
        return view('aspirasiadmin.edit',compact('aspirasi'));
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
        $aspirasi = Aspirasi::find($id);
        $aspirasi->status = $request->status;
        $aspirasi->save();
        return redirect()->route('adminaspirasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->delete();
        return redirect()->route('adminaspirasi.index');
    }

    public function history()
    {
        $aspirasi = Aspirasi::where('status','selesai')->get();
        $no = 1;
        return view('history.index',compact('aspirasi','no'));
    }

    public function feedback($id)
    {
        $aspirasi = Aspirasi::find($id);
        $no = 1;
        return view('aspirasiadmin.feedback',compact('aspirasi','no'));
    }
}
