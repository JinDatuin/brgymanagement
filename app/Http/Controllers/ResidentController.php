<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Resident;
use App\Models\Clearancereq;

class ResidentController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $resident = Resident::where('email', $user->email)->first();
        return view('resident.dashboard', compact('resident'));
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
        $user = Auth::user();
        $resident = Resident::where('email', $user->email)->first();

        if ($resident) {
            $requests = Clearancereq::where('resident_id', $resident->id)->get();
        } else {
            $requests = collect(); // Empty collection if no resident found
        }

        return view('resident.requests', compact('resident', 'requests'));
    }
}
