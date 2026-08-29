<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;

class DirectoryController extends Controller
{
    public function index()
    {
        return view('directory');
    }

    public function show($id)
    {
        return view('nurse-detail');
    }
}