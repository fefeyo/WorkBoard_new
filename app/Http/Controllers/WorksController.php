<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class WorksController extends Controller
{
    public function index()
    {
        $works = Work::paginate(5);
        return view('work.index', compact('works'));
    }

    public function show(Work $work)
    {
        return view('work.detail', compact('work'));
    }
}
