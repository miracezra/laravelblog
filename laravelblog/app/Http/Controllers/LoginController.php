<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function control($role=null)
    {
        // $control = Database::table('users')
        // ->select('role_id')
        // ->where('id',Auth::user()->id)
        // ->first();
        // if ($role==2) {
        //  return view('user.dashboard');   # code...
        // }
        // else
        // {
        //     return view('admin.dashboard');
        // }
    }
}
