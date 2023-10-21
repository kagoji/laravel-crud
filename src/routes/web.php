<?php

namespace Kagoji\Crud\Routes;

use Illuminate\Support\Facades\Route;
use Kagoji\Crud\Controllers\CandidateController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['web'])->group(function () {
    // Store: Store a new candidate in the database
    Route::get('/candidates', [CandidateController::class, 'show'])->name('candidates.show');

    // Create Show the form to create a new candidate
    Route::post('/candidates/store', [CandidateController::class, 'store'])->name('candidates.store');

    // Read: Display a specific candidate
    Route::get('/candidates/{candidate}/edit', [CandidateController::class, 'edit'])->name('candidates.edit');


    // Update: Update a specific candidate in the database
    Route::post('/candidates/{candidate}/edit', [CandidateController::class, 'update'])->name('candidates.update');

    // Delete: Delete a specific candidate
    Route::get('/candidates/{candidate}/delete', [CandidateController::class, 'destroy'])->name('candidates.destroy');



    Route::get('/', function () {
        // return view('welcome');
        //return view('crud');
        return view('pages.biodata');
    });
});
