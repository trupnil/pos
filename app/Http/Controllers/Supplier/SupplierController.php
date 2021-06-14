<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
     public function index()
    {
    	return view('layout.supplier.list_supplier');
    }

    public function create()
    {
    	return view('layout.supplier.add_supplier');
    }
}
