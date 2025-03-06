<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Operations;

class AboutController extends Controller
{
    /**
     * Display the about us page.
     *
     * @return View
     */
    public function index(): View
    {
        return view('frontend.aboutus.index');
    }

    /**
     * Display the our team page.
     *
     * @return View
     */
    public function ourTeam(): View
    {
        return view('frontend.aboutus.ourteam');
    }

    /**
     * Display the rules page.
     *
     * @return View
     */
    public function rules(): View
    {
        return view('frontend.aboutus.rules');
    }

    /**
     * Display the our fleets page.
     *
     * @return View
     */
    public function ourFleets(): View
    {
        $fleet = Operations::getFleet(500);
        return view('frontend.aboutus.ourfleets')->with('fleets', $fleet);
    }
}
