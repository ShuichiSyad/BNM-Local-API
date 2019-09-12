<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\CurrencyUnit;

class ExchangeRate extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            // 'currency' => PostResource::collection($this->currency_unit_id),
            // CurrencyUnit::find($this->currency_unit_id, ['currency_code', 'id']),
            'currency_code' => CurrencyUnit::where('id', $this->currency_unit_id)->first()->currency_code,
            'unit' => CurrencyUnit::where('id', $this->currency_unit_id)->first()->unit,
            // 'currency_unit_id' => $this->currency_unit_id,
            'buying_rate' => $this->buying_rate,
            'selling_rate' => $this->selling_rate,
            'middle_rate' => $this->middle_rate,
            'created_at' => $this->created_at,
        ];
    }
}
