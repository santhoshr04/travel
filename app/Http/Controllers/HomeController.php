<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $yearStarted = 2004;
        $currentYear = now()->year;
        $yearsActive = $currentYear - $yearStarted;

        // Get the total count of pilots
        $pilotCount = DB::table('phpvms_pilots')->count();

        // Get the total hours from the table
        $totalHours = DB::table('phpvms_pilots')->sum('totalhours');

        $fleetCount = DB::table('phpvms_aircraft')
        ->where('enabled', 1)
        ->count();

        return view('frontend.index', compact('yearsActive', 'pilotCount', 'totalHours', 'fleetCount'));
    }

}