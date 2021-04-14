<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirasi;
use App\Kategori;
use Alert;
class AspirasiController extends Controller
{
    
    public function index(Request $request)
    {
        $aspirasi = Aspirasi::where('id',$request->search)->get()->first();
        if(!$aspirasi)
        {
            return abort(404);
        }
       
        return view('aspirasi.feedback',compact('aspirasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $aspirasi = Aspirasi::all();
        return view('aspirasi.create',compact('kategori','aspirasi'));
    }

 
    public function store(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required|digits:16',
            'status' => 'required',
            'kategori_id' => 'required',
            'alamat' => 'required',
            'aspirasi' => 'required'
        ]);

        if(request('kategori_id') == "null"){
            Alert::error('Gagal','Kategori Harus Diisi');
            return redirect('/aspirasi/create');
        }

        $aspirasi = new Aspirasi;
        $aspirasi->nik = $request->nik;
        $aspirasi->status = $request->status;
        $aspirasi->kategori_id = $request->kategori_id;
        $aspirasi->alamat = $request->alamat;
        $aspirasi->aspirasi = $request->aspirasi;
        $aspirasi->save();

        Alert::success('Berhasil','ID Anda Adalah :'.$aspirasi->id);
        return redirect('/finish')->with(['success' => 'Aspirasi Berhasil Tersampaikan! Catat ID Pelaporanmu: '. $aspirasi->id]);
    }


    public function dashboard()
    {
        return view('dashboard.index');
    }
    
    public function finish()
    {
        return view('aspirasi.finish');
    }

  
    public function ubahfeedback(Request $request, $id)
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->feedback = $request->feedback;
        $aspirasi->save();
        return redirect('aspirasi/feedback/'.$id);
    }

    public function feedback($id)
    {
        $aspirasi = Aspirasi::find($id);
        return view('aspirasi.feedback',compact('aspirasi'));
    }

    public function about()
    {
        return view('aspirasi.about');
    }

    public function history()
    {
        $aspirasi = Aspirasi::where('status','selesai')->get();
        $no = 1;
        return view('aspirasi.history',compact('aspirasi','no'));
    }

}
