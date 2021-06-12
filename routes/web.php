<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukucontrol;
use App\Exports\UsersExport;

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
Route::get('/buku', [bukucontrol::class,'index']);
Route::get('/buku/ekspor', [bukucontrol::class,'ekspor']);
