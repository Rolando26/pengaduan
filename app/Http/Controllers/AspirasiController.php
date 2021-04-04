<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Aspirasi;
class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $aspirasi = Aspirasi::where('id',$request->search)->orWhere('nik', $request->search)->get()->first();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'status' => 'required',
            'kategori_id' => 'required',
            'alamat' => 'required',
            'aspirasi' => 'required'
        ]);

        $aspirasi = new Aspirasi;
        $aspirasi->nik = $request->nik;
        $aspirasi->status = $request->status;
        $aspirasi->kategori_id = $request->kategori_id;
        $aspirasi->alamat = $request->alamat;
        $aspirasi->aspirasi = $request->aspirasi;
        $aspirasi->save();

        return redirect('/finish');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function feedback($id)
    {
        $aspirasi = Aspirasi::find($id);
        return view('aspirasi.feedback',compact('aspirasi'));
    }

    public function ubahfeedback(Request $request, $id)
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->feedback = $request->feedback;
        $aspirasi->save();
        return redirect('aspirasi/feedback/'.$id);
    }

    public function finish()
    {
        return view('finish');
    }


}
