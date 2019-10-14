<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => []], function ($app) {
    Route::resource('actualStatus', 'ActualStatusController')->only(['index', 'show']);
    Route::resource('addressObject', 'AddressObjectController')->only(['index', 'show']);
    Route::resource('addressObjectType', 'AddressObjectTypeController')->only(['index', 'show']);
    Route::resource('centerStatus', 'CenterStatusController')->only(['index', 'show']);
    Route::resource('currentStatus', 'CurrentStatusController')->only(['index', 'show']);
    Route::resource('estateStatus', 'EstateStatusController')->only(['index', 'show']);
    Route::resource('flatType', 'FlatTypeController')->only(['index', 'show']);
    Route::resource('house', 'HouseController')->only(['index', 'show']);
    Route::resource('houseStateStatus', 'HouseStateStatusController')->only(['index', 'show']);
    Route::resource('intervalStatus', 'IntervalStatusController')->only(['index', 'show']);
    Route::resource('normativeDocument', 'NormativeDocumentController')->only(['index', 'show']);
    Route::resource('normativeDocumentType', 'NormativeDocumentTypeController')->only(['index', 'show']);
    Route::resource('operationStatus', 'OperationStatusController')->only(['index', 'show']);
    Route::resource('room', 'RoomController')->only(['index', 'show']);
    Route::resource('roomType', 'RoomTypeController')->only(['index', 'show']);
    Route::resource('stead', 'SteadController')->only(['index', 'show']);
    Route::resource('structureStatus', 'StructureStatusController')->only(['index', 'show']);
});
