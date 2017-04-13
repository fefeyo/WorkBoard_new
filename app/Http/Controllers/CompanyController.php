<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Work;

class CompanyController extends Controller
{
    public function __construct()
    {
        // $this->middleware('company');
    }

    public function index()
    {
        return view('company.create_post');
    }

    public function create()
    {
        request()['user_id'] = Auth::user()->id;
        request()['due'] = \Carbon\Carbon::parse(request('due'));
        // dd(request('body'));
        Work::create(request()->all());

        return redirect('/home');
    }
}
