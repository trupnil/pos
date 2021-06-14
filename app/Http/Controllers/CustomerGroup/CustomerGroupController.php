<?php

namespace App\Http\Controllers\CustomerGroup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerGroupController extends Controller
{
    //
      public function index()
    {
    	return view('layout.customer_group.list-customer-group');
    }

    public function create()
    {
    	return view('layout.customer_group.add-customer-group');
    }
}
