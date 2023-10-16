<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appApi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [appApi::class, 'index']);

Route::get('getCity/ajax/{id}', [appApi::class, 'ajax']);
