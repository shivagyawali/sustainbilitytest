<?php

use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [PagesController::class, 'registration']);
Route::get('/governance', [PagesController::class, 'governance']);
Route::get('/energy', [PagesController::class, 'energy']);
Route::get('/water', [PagesController::class, 'water']);
Route::get('/procurement', [PagesController::class, 'procurement']);
Route::get('/GHG-Emission', [PagesController::class, 'GHGEmission']);
Route::get('/non-ghg-emission', [PagesController::class, 'nonghgemission']);
Route::get('/waste', [PagesController::class, 'waste']);
Route::get('/Encroachment', [PagesController::class, 'Encroachment']);
Route::get('/wages', [PagesController::class, 'wages']);
Route::get('/health', [PagesController::class, 'health']);
Route::get('/terms', [PagesController::class, 'terms']);
Route::get('/discrimination', [PagesController::class, 'discrimination']);
Route::get('/ethicalpractices', [PagesController::class, 'ethicalpractices']);
Route::get('/positive-impacts', [PagesController::class, 'positiveimpacts']);
Route::get('/ESGscores', [PagesController::class, 'ESGscores']);
Route::get('/SDG-scores', [PagesController::class, 'SDGscores']);
Route::get('/capitalscores', [PagesController::class, 'capitalscores']);
Route::get('/takeAction', [PagesController::class, 'takeAction']);
Route::post('/store', [PagesController::class, 'store']);
