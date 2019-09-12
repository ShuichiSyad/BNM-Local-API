<?php

namespace App;
use App\Traits\UsesUuid;

use Illuminate\Database\Eloquent\Model;

class CompanyShady extends Model
{
    use UsesUuid;
    // Define table name
    protected $table = 'tbl_company_shady';
    public $timestamps = false;

    // To allow access child table
    public function companyWebsite()
    {
        return $this->hasMany('App\CompanyWebsite');
    }
}
