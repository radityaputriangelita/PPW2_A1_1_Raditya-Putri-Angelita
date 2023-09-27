<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabel_barang;

class Tabel_barangController extends Controller
{
    public function index(){
        $data_barang = Tabel_barang::all();
        return view('index', compact('data_barang'));
    }
}
