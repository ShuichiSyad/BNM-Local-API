<?php

use Illuminate\Database\Seeder;
use App\CurrencyUnit;

class CurrencyUnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define arraylist to be inserted into table
        $currency_units = [
            ['currency_code' => 'AUD', 'unit' => 1],
            ['currency_code' => 'CAD', 'unit' => 1],
            ['currency_code' => 'EUR', 'unit' => 1],
            ['currency_code' => 'GBP', 'unit' => 1],
            ['currency_code' => 'JPY', 'unit' => 100],
            ['currency_code' => 'SGD', 'unit' => 1],
            ['currency_code' => 'USD', 'unit' => 1],
            ['currency_code' => 'MYR', 'unit' => 1]
        ];

        foreach($currency_units as $currency_unit){
            // Insert data into table, avoid multiple insert
            CurrencyUnit::firstOrCreate($currency_unit);
        }
    }
}
