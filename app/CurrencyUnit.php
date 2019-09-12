<?php

namespace App;
use App\Traits\UsesUuid;

use Illuminate\Database\Eloquent\Model;

class CurrencyUnit extends Model
{
    use UsesUuid;
    // Define table name
    protected $table = 'tbl_currency_unit';
    public $timestamps = false;

    // To allow access child table
    public function exchangeRate()
    {
        return $this->hasMany('App\ExchangeRate');
    }
}
