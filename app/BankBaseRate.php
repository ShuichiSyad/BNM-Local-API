<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankBaseRate extends Model
{
    protected $table = 'tbl_bank_base_rate';
    public $timestamps = false;
    protected $primaryKey = 'bank_code';
    public $incrementing = false;
}
