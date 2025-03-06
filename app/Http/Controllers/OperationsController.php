<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operations;
use App\Models\Stats;
use DB;
use View;
use App\Discord;

class OperationsController extends Controller
{

    public function pilots()
    {
        // Fetch active pilots from the database
        $pilots = DB::table('phpvms_pilots')->where('retired', 0)->get();
        
        // Get total number of active pilots
        $totalPilots = DB::table('phpvms_pilots')->where('retired', 0)->count();
        
        return view('frontend.operations.pilots', [
            'pilots' => $pilots,
            'totalPilots' => $totalPilots,
        ]);
    }

    public function missions() {
      
      return view('frontend.operations.missions');
  	}

//    public function fleet()
//     {
//         $fleet = Operations::getFleet(500);
//         return view('frontend.operations.fleet')->with('fleets', $fleet);
//     }

}
