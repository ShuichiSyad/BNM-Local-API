<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CompanyShady;
use App\CompanyWebsite;
use App\Http\Resources\ShadyCompany as ShadyCompanyResource;

class ShadyCompaniesController extends Controller
{
    public function index(){
        $shady_companies = CompanyShady::paginate(15);

        return ShadyCompanyResource::collection($shady_companies);
    }

    public function fetch($company_name){
        
        $shady_companies = CompanyShady::WhereRaw('MATCH(company_name) AGAINST(?)', [$company_name])->get();
        return ShadyCompanyResource::collection($shady_companies);
    }
}
