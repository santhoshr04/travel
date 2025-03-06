<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OperationsController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommandsController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/privacy-policy', 'frontend.privacy-policy.index')->name('privacy-policy');

/**
 *
 * /about
 * /about/team
 * /about/hubs
 * /about/pilot-roster
 *
 *
 * /operations/aircrafts
 * /operations/recent-flights
 * /operations/upcoming-departures
 *
 *
 * /contact
 * /contact/send (POST)
 * /contact/thank-you
 *
 */

Route::get('/commands', [CommandsController::class, 'list_commands'])->name('commands.index');
Route::post('/commands/execute', [CommandsController::class, 'execute_command'])->name('commands.execute');


 Route::prefix('/about')->as('about.')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('index');
    Route::get('/our-team', [AboutController::class, 'ourTeam'])->name('our-team');
    Route::get('/rules', [AboutController::class, 'rules'])->name('rules');
    Route::get('/our-fleets', [AboutController::class, 'ourFleets'])->name('our-fleets');
});

 Route::prefix('/stats')->as('stats.')->group(function() {
    Route::get('/live-flights', [StatsController::class, 'liveflights'])->name('liveflights');
    Route::get('/departures', [StatsController::class, 'departures'])->name('departures');
    Route::get('/pireps', [StatsController::class, 'pireps'])->name('pireps');
});

 Route::prefix('/operations')->as('operations.')->group(function() {
    Route::get('/missions', [OperationsController::class, 'missions'])->name('missions');
    Route::get('/pilot-roster', [OperationsController::class, 'pilots'])->name('pilots');
});

//  Route::prefix('/contact')->as('contact.')->group(function() {
    
//     Route::get('/', function () {
//         return view('frontend.contactus.index');
//     });
//  });
Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');  
    Route::post('/submit', [ContactController::class, 'submit'])->name('submit'); 
});
 