<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PegawaiController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Pengunjung\PengunjungController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pegawai', [PegawaiController::class, 'read']);
Route::get('pegawai/show/{id}', [PegawaiController::class, 'show']);
Route::post('pegawai/store2', [PegawaiController::class, 'store2']);
Route::put('pegawai/updateData/{id}', [PegawaiController::class, 'updateData']);
Route::delete('pegawai/deleteData/{id}', [PegawaiController::class, 'deleteData']);

Route::group(['prefix' => 'pengunjung'], function () {
    Route::get('get-data',  [PengunjungController::class, 'getPengunjung']);
    Route::post('save-data',  [PengunjungController::class, 'savePengunjung']);
    Route::delete('delete-data',  [PengunjungController::class, 'deletePengunjung']);
});

Route::group(['prefix' => 'menu'], function () {
    Route::get('get-data',  [MenuController::class, 'getMenu']);
});