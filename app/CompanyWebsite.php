<?php

namespace App;
use App\Traits\UsesUuid;

use Illuminate\Database\Eloquent\Model;

class CompanyWebsite extends Model
{
    use UsesUuid;
    // Define table name
    protected $table = 'tbl_company_website';
    public $timestamps = false;

    // To allow access child table
    public function companyShady()
    {
        return $this->belongsTo('App\CompanyShady');
    }
}
