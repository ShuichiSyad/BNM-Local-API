<?php

use Illuminate\Http\Request;

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

// List all currency
Route::get('exchange-rates', 'ExchangeRatesController@index');

// List single currency
Route::get('exchange-rate/{currency}', 'ExchangeRatesController@fetch');

// List all company
Route::get('company-alerts', 'ShadyCompaniesController@index');

// List single company
Route::get('company-alerts/{company_name}', 'ShadyCompaniesController@fetch');

// List all bank base rate
Route::get('base-rate', 'BankBaseRateController@index');

// List all bank base rate
Route::get('base-rate/{bank_code}', 'BankBaseRateController@fetch');

// Fallback response if route not found
Route::fallback(function(){
    return response()->json([
        'message' => 'Resource not found. If error persists, contact eisyad.irsyad@gmail.com'], 404);
});