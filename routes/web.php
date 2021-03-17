<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CampingController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ImportExportController;
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
Route::middleware(['auth'])->group(function(){
Route::get('/', function () {return view('home');});
Route::resource('admin', App\Http\Controllers\CampingController::class);
});
Route::get('campings/index-paging', [CampingController::class, 'indexpaging']);

Route::get('import-export', [ImportExportController::class, 'importExport']);
Route::post('import-file', [ImportExportController::class, 'importFile'])->name('import-file');
Route::get('export-file', [ImportExportController::class, 'exportFile'])->name('export-file');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
