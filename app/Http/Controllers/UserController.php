<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Alert;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $no = 1;
        return view('users.index',compact('users','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'name' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $users = new User;
        $users->name = $request->name;
        $users->username = $request->username;
        $users->password = \Hash::make($request->password);
        $users->save();
        Alert::success('Berhasil','User Berhasil Ditambahkan');
        return redirect('users');
    }

    public function edit($id)
    {
        
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
   
    }

    public function show($id)
    {
        
    }

    /**
     * Remove the specified resource from storage.  
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        if($users->id == Auth::user()->id)
        {
            Alert::error('Gagal','Anda Tidak Dapat Menghapus Diri Sendiri');
            return back();
        }
        $users->delete();
        Alert::success('Berhasil','User Berhasil Di hapus');
        return redirect('users');
    }
}
