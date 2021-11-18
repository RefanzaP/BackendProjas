<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderController extends Controller
{
    public function ambil(){
        $order = DB::table('order_detail')->get();
        return view('order',['order_detail' => $order]);
    }

    public function tambah(){
        return view('tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table order_detail
        DB::table('order_detail')->insert([
            'nama_pelanggan' => $request->nama_pelanggan,
            'kode_unik' => $request->kode,
            'nama_order' => $request->nama_order,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman order
        return redirect('/order');
     
    }
    public function edit($id_order)
    {
        // mengambil data order berdasarkan id yang dipilih
        $order = DB::table('order_detail')->where('id_order',$id_order)->get();
        // passing data order yang didapat ke view edit.blade.php
        return view('ubah',['order_detail' => $order]);
     
    }

    public function update(Request $request)
    {
	// update data order
	DB::table('order_detail')->where('id_order',$request->id_order)->update([
		'nama_pelanggan' => $request->nama_pelanggan,
		'kode_unik' => $request->kode_unik,
		'nama_order' => $request->nama_order,
		'status' => $request->status
	]);
	// alihkan halaman ke halaman order
	return redirect('/order');
    }

    public function hapus($id_order){
        DB::table('order_detail')->where('id_order',$id_order)->delete();
	return redirect('/order');
}
    }

