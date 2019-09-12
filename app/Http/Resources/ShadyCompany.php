<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\CompanyShady;

class ShadyCompany extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'company_name' => $this->company_name,
            'registration_number' => $this->registration_number,
            'added_date' => $this->added_date,
            'websites' => $this->companyWebsite->pluck('company_website'),

        ];
    }
}
