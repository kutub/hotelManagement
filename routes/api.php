<?php

use App\Flats;
use App\Http\Resources\FlatResource;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/buildings', 'BuildingsController');
Route::apiResource('/flats', 'FlatsController');
Route::apiResource('/renters', 'RentersController');
Route::apiResource('/booking', 'BookingController');
Route::apiResource('/deposit', 'DepositController');
Route::get('/{building}/flats', 'FlatsController@index');
Route::apiResource('/expenses', 'ExpensesController');
Route::apiResource('/withdraw', 'WithdrawalController');
Route::apiResource('/dashboard', 'DashboardController');


