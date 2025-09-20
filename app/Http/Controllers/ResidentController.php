<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function dashboard()
    {
        return view('resident.dashboard');
    }

    public function services()
    {
        return view('resident.services');
    }

    public function complaints()
    {
        return view('resident.complaints');
    }

    public function requests()
    {
        return view('resident.requests');
    }
}
