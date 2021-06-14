<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountGroup extends Controller
{
    //
    public function index()
    {
    	return view('layout.account_group.list_account_group');
    }

    public function create()
    {
    	return view('layout.account_group.add-account-group');
    }
}
