<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;
use DB;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan=message::all();
        
        return view('admin.admin_view',['pesan'=>$pesan]);
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
        $request->validate([
            'email'=>'required',
            'nama_pemesan'=>'required',
            'alamat'=>'required',
            'nama_produk'=>'required',
            'no_hp'=>'required',
            'jumlah'=>'required',
            'pesan'=>'required'
        ]);

        messages::create([
            'email'=>$request->email,
            'nama_pemesan'=>$request->nama_pemesan,
            'alamat'=>$request->alamat,
            'nama_produk'=>$request->nama_produk,
            'no_hp'=>$request->no_hp,
            'jumlah'=>$request->jumlah,
            'pesan'=>$request->pesan
           ]);

           
            return redirect('/catalog');
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
        //
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
    
    public function hapus($id)
    {
        DB::table('messages')->where('id',$id)->delete();
    	return redirect('pesanan')->with('status', 'Data Berhasil Dihapus');
    }
}
