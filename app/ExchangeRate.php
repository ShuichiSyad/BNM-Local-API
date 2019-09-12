<?php

namespace App;
use App\Traits\UsesUuid;

use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    use UsesUuid;

    // Define table name
    protected $table = 'tbl_exchange_rate';
    public $timestamps = false;

    protected $fillable = ['buying_rate', 'selling_rate', 'middle_rate'];

    // To allow access parent table
    public function currencyUnit()
    {
        return $this->belongsTo('App\CurrencyUnit');
    }
}
