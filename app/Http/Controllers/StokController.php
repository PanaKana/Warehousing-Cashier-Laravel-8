<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class StokController extends Controller
{
  public function home()
  {
    $mutasibulanan = DB::table('mutasi')
      ->join('user', 'mutasi.updated_by', '=', 'user.id_user')
      ->join('barang', 'mutasi.id_barang', '=', 'barang.id_barang')
      ->get();
    // dd($mutasibulanan);
    return view('stok.home', compact('mutasibulanan'));
  }

  public function allstok()
  {
    $stok = DB::table('stok')
      ->join('barang', 'stok.id_barang', '=', 'barang.id_barang')
      ->join('satuan', 'barang.satuan', '=', 'satuan.idsatuan')
      ->get();
    // dd($stok);
    return view('stok.allstok', compact('stok'));
  }

  public function allmutasi()
  {
    # code...
  }

  public function mutasimasuk()
  {
    # code...
  }

  public function mutasikeluar()
  {
    # code...
  }
}
