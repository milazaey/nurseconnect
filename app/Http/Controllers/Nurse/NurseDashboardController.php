<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;

class NurseDashboardController extends Controller
{
    public function index()
    {
        return view('nurse.dashboard');
    }
}