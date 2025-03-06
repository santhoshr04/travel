<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operations;
use App\Models\Stats;
use DB;
use View;
use App\Discord;

class StatsController extends Controller
{
  public function liveflights() {
    $liveflights = DB::table('phpvms_acarsdata')
   ->whereDate('lastupdate', DB::raw('CURDATE()'))
   ->where('timeremaining','!=', '0:00')
   ->where('timeremaining','!=', 'N/A')
   ->get();

   //Use the second one, because the first one counts
   //the expired / landed flights as well. This code is
   // from iCrew. Hence should be pretty accurate.

   $liveflights_acars = DB::select('SELECT a.*, c.name as aircraftname, c.registration,
       p.code, p.pilotid as pilotid, p.firstname, p.lastname,
       dep.name as depname, dep.lat AS deplat, dep.lng AS deplng,
       arr.name as arrname, arr.lat AS arrlat, arr.lng AS arrlng
     FROM phpvms_acarsdata a
     LEFT JOIN phpvms_aircraft c ON a.`aircraft`= c.`registration`
     LEFT JOIN phpvms_pilots p ON a.`pilotid`= p.`pilotid`
     LEFT JOIN phpvms_airports AS dep ON dep.icao = a.depicao
     LEFT JOIN phpvms_airports AS arr ON arr.icao = a.arricao
     WHERE DATE_SUB(NOW(), INTERVAL 5 MINUTE) <= a.`lastupdate`');

   return view('frontend.stats.liveflights')->with('flights', $liveflights_acars);
  }

  public function departures()
  {
      $bids = DB::select('SELECT p.*, s.*, b.bidid as bidid, b.dateadded, a.name as aircraft, a.registration
                          FROM phpvms_schedules s
                          JOIN phpvms_bids b ON b.routeid = s.id
                          JOIN phpvms_aircraft a ON s.aircraft = a.id
                          JOIN phpvms_pilots p ON p.pilotid = b.pilotid
                          ORDER BY b.bidid DESC');

      return view('frontend.stats.departures', compact('bids'));
    }


    public function pireps() {
      $count = 30;
      $pireps = Operations::getPireps($count);
      return view('frontend.stats.pireps')->with('pireps', $pireps);
    }

}
