<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BankBaseRate;
use App\HttP\Resources\BankBaseRate as BankBaseRateResource;

class BankBaseRateController extends Controller
{
    public function index(){
        $bank_base_rate = BankBaseRate::all();

        return BankBaseRateResource::collection($bank_base_rate);
    }

    public function fetch($bank_code){
        $bank_base_rate = BankBaseRate::find($bank_code)->first();

        return new BankBaseRateResource($bank_base_rate);
    }
}
