<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DashboardController@index');

Auth::routes();

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/lineoa', [App\Http\Controllers\LineoaController::class, 'index'])->name('lineoa');
Route::get('/lineoa/flex1', [App\Http\Controllers\LineoaController::class, 'flex1'])->name('flex1');
Route::get('/lineoa/flex2', [App\Http\Controllers\LineoaController::class, 'flex2'])->name('flex2');
Route::get('/lineoa/flex3', [App\Http\Controllers\LineoaController::class, 'flex3'])->name('flex3');
Route::post('/lineoa/flex1send', [App\Http\Controllers\LineoaController::class, 'flex1send'])->name('flex1send');
Route::post('/lineoa/flex2send', [App\Http\Controllers\LineoaController::class, 'flex2send'])->name('flex2send');
Route::post('/lineoa/flex3send', [App\Http\Controllers\LineoaController::class, 'flex3send'])->name('flex3send');


Route::get('/lastupdate', function () {
    return view('update', [
        'active_menu_manual' => "active",
        'active_menu_lastupdate' => "active",
        'controller_name' => "Last update",
    ]);
});
