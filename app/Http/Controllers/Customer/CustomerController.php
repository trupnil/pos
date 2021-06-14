<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
      public function index()
    {
    	return view('layout.customer.list_customer');
    }

    public function create()
    {
    	return view('layout.customer.add_customer');
    }
}
