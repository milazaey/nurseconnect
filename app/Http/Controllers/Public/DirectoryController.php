<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;

class DirectoryController extends Controller
{
    public function index()
    {
        return view('public.directory');
    }

    public function show($id)
    {
        return view('public.nurse-detail');
    }
}
