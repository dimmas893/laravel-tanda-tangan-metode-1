<?php

use App\Http\Controllers\SignatureController;
use App\Models\Signature;
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

Route::get('/', function () {
    $signature = Signature::all();
    return view('welcome' , compact('signature'));
});

// Route::view('/signature', 'signature');
Route::post('/signature/post', [SignatureController::class, 'store']);
