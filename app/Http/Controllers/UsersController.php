<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    public function index()
    {
        if(Auth::user()->role_type === 1) {
            \Session::flash('flash_message', '登録した案件に応募があります！');
            return view('user.company');
        } else {
            return view('user.general');
        }
    }
}
