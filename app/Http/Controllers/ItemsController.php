<?php

namespace App\Http\Controllers;

use App\Models\NamaBarang;
use Illuminate\Http\Request;
use PhpParser\Node\UseItem;

class ItemsController extends Controller
{
    public function index()
    {
        return view('admin.items.components.table_data');
    }

    public function create()
    {
        return view('admin.items.components.add_produk');
    }
    public function store(Request $request)
    {
        $data =  new NamaBarang();
    }
}
