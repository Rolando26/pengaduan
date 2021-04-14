<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirasi;
use App\Kategori;
use Alert;
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
            
            
            if($request->kategori != "null"){
                $aspirasi = Aspirasi::where('created_at','LIKE',"$tanggal%")->where('kategori_id',$request->kategori)->get();
               
            }elseif($request->penduduk != "null")
            {
                $aspirasi = Aspirasi::where('created_at','LIKE',"$tanggal%")->where('kategori_id',$request->kategori)->where('id', $request->penduduk)->get()->get();
            }

        }elseif($request->kategori != "null" && $request->cari == true ){
            $aspirasi = Aspirasi::where('kategori_id',$request->kategori)->get();

        }elseif($request->penduduk != "null" && $request->cari == true){
            $aspirasi = Aspirasi::where('id', $request->penduduk)->get();

        }
     
        elseif($request->bulan != "null" && $request->cari == true){
           
            $aspirasi = Aspirasi::where('created_at','LIKE',"_____$request->bulan%")->get();
            }


        // END LOGIC Filter

        if($aspirasi->count() == 0 && ($kategori == "null" && $tanggal == null)){
            $aspirasi = Aspirasi::all();
        }

        if($aspirasi->count() == 0 && ($kategori == "null" &&  $tanggal == null)){
            $aspirasis = Aspirasi::all();
        }
        
        $no = 1;
        return view('aspirasiadmin.index',compact('aspirasi','no','kategori'));
    }



    public function edit($id)
    {   
        $aspirasi = Aspirasi::find($id);
        return view('aspirasiadmin.edit',compact('aspirasi'));
    }


    public function update(Request $request, $id)
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->status = $request->status;
        $aspirasi->save();
        return redirect('/admin/aspirasi');
    }


    public function destroy($id)
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->delete();
        return redirect('/admin/aspirasi');
    }

    public function feedback($id)
    {
        $aspirasi = Aspirasi::find($id);
        $no = 1;
        return view('aspirasiadmin.feedback',compact('aspirasi','no'));
    }

    public function history()
    {
        $aspirasi = Aspirasi::where('status','selesai')->get();
        $no = 1;
        return view('aspirasiadmin.history',compact('aspirasi','no'));
    }
}
