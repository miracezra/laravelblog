<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    //Index method for SuperAdmin Controller
 
    public function __construct()

    {
        $this->middleware('auth');
        $this->middleware('role:Admin');
    }
}
