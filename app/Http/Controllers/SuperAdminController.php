<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SuperAdminController extends Controller
{
    public function cekstok()
    {
        $cekstok = DB::table('barang')->get();
        dd($cekstok);
    }
}