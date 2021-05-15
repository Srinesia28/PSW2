<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\product;
use DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk=product::all();

    return view('admin.produk',['produk'=>$produk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_produk');
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
            'nama_produk'=>'required',
            'harga_produk'=>'required',
            'toko'=>'required',
            'kondisi'=>'required',
            'stok'=>'required',
            'spesifikasi'=>'required',
            'alamat'=>'required',
            'gambar'=>'required'
        ]);
           
       product::create([
        'Nama_Produk'=>$request->nama_produk,
        'Harga_Produk'=>$request->harga_produk,
        'Toko'=>$request->toko,
        'Kondisi'=>$request->kondisi,
        'Stok'=>$request->stok,
        'Spesifikasi'=>$request->spesifikasi,
        'Alamat'=>$request->alamat,
        'Foto'=>$request->gambar

       ]);
       
        return redirect('/produk')->with('status', 'Data Berhasil Ditamabahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
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
        $produk = product::find($id);
        return view('admin.edit',compact('produk'));
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

        DB::table('products')->where('id',$request->id)->update([
            'Nama_Produk'=>$request->nama_produk,
            'Harga_Produk'=>$request->harga_produk,
            'Toko'=>$request->toko,
            'Kondisi'=>$request->kondisi,
            'Stok'=>$request->stok,
            'Spesifikasi'=>$request->spesifikasi,
            'Alamat'=>$request->alamat,
            'Foto'=>$request->gambar
        ]);
        return redirect('/produk')->with('status', 'Data Berhasil Diubah');
        /*
        
        $produk = product::find($id);
        $produk->id_produk=$request->id_produk;
        $produk->Nama_Produk=$request->Nama_Produk;
        $produk->Harga_Produk=$request->Harga_Produk;
        $produk->Toko=$request->Toko;
        $produk->Kondisi=$request->Kondisi;
        $produk->Stok=$request->Stok;
        $produk->Spesifikasi=$request->Spesifikasi;
        $produk->Alamat=$request->Alamat;
        $produk->Foto=$request->Gambar;
 
        $produk->save();
 
        return redirect()->action('ProdukController@index');
        */
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
        DB::table('products')->where('id',$id)->delete();
    	return redirect('produk')->with('status', 'Data Berhasil Dihapus');
    }
}
