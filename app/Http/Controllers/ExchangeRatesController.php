<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ExchangeRate;
use App\CurrencyUnit;
use App\Http\Resources\ExchangeRate as ExchangeRateResource;

class ExchangeRatesController extends Controller
{
    public function index(){

        $size = sizeof(CurrencyUnit::pluck('id'));
        
        // Assuming data were updated once per day
        $exchange_rate = ExchangeRate::orderBy('created_at', 'DESC')->orderBy('currency_unit_id', 'DESC')->take($size)->get();

        return ExchangeRateResource::collection($exchange_rate);
    }

    public function fetch($currency){

        $currency_unit_id = CurrencyUnit::where('currency_code', $currency)->first();

        if (empty($currency_unit_id)){
            return response()->json(['message' => 'No such currency found!'], 404);
        }

        $currency_unit_id = $currency_unit_id->id;

        $exchange_rate = ExchangeRate::where('currency_unit_id', $currency_unit_id)->orderBy('created_at', 'DESC')->take(1)->get();

        return ExchangeRateResource::collection($exchange_rate);
        
    }
}
