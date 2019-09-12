<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BankBaseRate extends JsonResource
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
            'bank_code' => $this->bank_code,
            'bank_name' => $this->bank_name,
            'base_rate' => $this->base_rate,
            'base_financing_rate' => $this->base_financing_rate,
            'indicative_eff_lending_rate' => $this->indicative_eff_lending_rate,
        ];
    }
}
