<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{pathMatch}', function(){ return view('welcome'); })->where('pathMatch',".*");

Route::get('/file', [AuthController::class, 'get_pdf']);
Route::get('/file-pdf', [AuthController::class, 'pdf']);

