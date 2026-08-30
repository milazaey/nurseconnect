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

    public function nearby()
    {
        return view('public.nearby');
    }

    // Tambahkan ini untuk melihat detail perawat
    public function show($id)
    {
        // Nantinya $id digunakan untuk query ke database (contoh: Nurse::find($id))
        return view('public.nurse-detail');
    }
}
