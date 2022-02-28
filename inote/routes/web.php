<?php

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

use App\Http\Controllers\NoteController;
use App\Http\Controllers\NoteTypeController;
use Illuminate\Support\Facades\DB;

Route::get('/home', function () {
    return view('welcome');
});
Route::prefix("notes")->group(
    function () {
        Route::get('/', [NoteController::class, "showAll"])->name("notes.list");
        Route::get('/{id}/detail', [NoteController::class, "show"])->name("note.detail");
        Route::get('/create', [NoteController::class, "create"])->name("note.create");
        Route::post('/create', [NoteController::class, "store"])->name("note.store");
    });
Route::prefix("noteTypes")->group(
    function () {
        Route::get('/', [NoteTypeController::class, "index"])->name("noteTypes.list");
        Route::get('/{id}/detail', [NoteTypeController::class, "show"])->name("noteType.detail");
        Route::get('/create', [NoteTypeController::class, "create"])->name("noteType.create");
        Route::post('/create', [NoteTypeController::class, "store"])->name("noteType.store");
    });

