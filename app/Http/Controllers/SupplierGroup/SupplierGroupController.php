<?php

namespace App\Http\Controllers\SupplierGroup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierGroupController extends Controller
{
    //
     public function index()
    {
    	return view('layout.supplier_group.list-supplier-group');
    }

    public function create()
    {
    	return view('layout.supplier_group.add-supplier-group');
    }
}
