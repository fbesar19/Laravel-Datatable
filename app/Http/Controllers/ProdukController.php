<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        return view('product.index');
    }

    public function data()
    {
        $data   = Produk::all();
        return Datatables::of($data)->make(true);
    }
}
