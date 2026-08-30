<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index()
    {
        return view('public.directory');
    }

    // --- TAMBAHKAN METHOD INI ---
    public function nearby()
    {
        return view('public.nearby');
    }
}
