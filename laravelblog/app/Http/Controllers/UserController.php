<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function __construct()

    {
        $this->middleware('auth');
        $this->middleware('role:User');
    }
}
