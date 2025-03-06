<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class VirtualAirline extends Model
{
    /**
     * getFleet
     *
     * @param  mixed $total
     * @return void
     */
    public static function getFleet($total = 8)
    {
        return DB::table('phpvms_aircraft')->where('enabled', 1)->groupBy('icao')->limit($total)->get();
    }

    /**
     * getPilots
     *
     * @return void
     */
    public static function getPilots()
    {
        return DB::table('phpvms_pilots')->limit(50)->get();
    }

    /**
     * getPireps
     *
     * @return void
     */
    public static function getPireps()
    {
        return DB::table('phpvms_pireps')->where('accepted', 1)->limit(50)->orderBy('pirepid', 'DESC')->get();
    }

    /**
     * getPilotsHub
     *
     * @param  mixed $hub
     * @return void
     */
    public static function getPilotsHub($hub)
    {
        return DB::table('phpvms_pilots')->where('hub', $hub)->get();
    }

    /**
     * fileurl
     *
     * @param  mixed $path
     * @return void
     */
    public static function fileurl($path)
    {
        $url = env('VA_URL');
        if ($path[0] != '/') $path = '/' . $path;
        return $url . $path;
    }
}
