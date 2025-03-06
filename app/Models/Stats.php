<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Stats extends Model
{
    public static function getTotalPilots() {
      return DB::table('phpvms_pilots')->count();
    }

    public static function getTotalPIREPs() {
      return DB::table('phpvms_pireps')->count();
    }

    public static function getPilotName($pilotid) {
     $data =  DB::table('phpvms_pilots')->where('pilotid', $pilotid)->first();
     if($data) {
       return $data->firstname.' '.$data->lastname;
     } else {
       return "Not available";
     }
   }

    public static function getSchedules() {
      return DB::table('phpvms_schedules')->count();
    }

    public static function getAirports() {
      return DB::table('phpvms_airports')->count();
    }

    public static function getAircrafts() {
      return DB::table('phpvms_aircraft')->count();
    }

}
