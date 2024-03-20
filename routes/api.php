<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Office management
Route::controller(OfficeController::class)->group(function () {
    Route::get('/office', 'get');
    Route::post('/office/create', 'create');
    Route::put('/office/update/{office}', 'update');
    Route::delete('/office/delete/{office}', 'delete');
});

