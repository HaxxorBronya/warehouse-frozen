<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SuppController;
use App\Http\Controllers\KateController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupexportController;
use DataTables;
use Yajra\DataTables\Services\DataTable;

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

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('supplier', function() {
//     $model = App\Http\Controllers\SuppController::query();
 
//     return DataTables::of($model)->toJson();
// });

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('barangs', BarangController::class);
    Route::resource('suppliers', SuppController::class);
    Route::resource('kategoris', KateController::class);
    Route::get('/exportb', 'App\Http\Controllers\ReportController@index');    
    Route::get('/exportsupp', 'App\Http\Controllers\SupexportController@index');    

    Route::get('/barangexp', 'App\Http\Controllers\ReportController@export');
    Route::get('/suppexp', 'App\Http\Controllers\SupexportController@export');
    

    
    Route::get('/test', function () {
        return view('test');
    });
});
