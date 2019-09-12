<?php

use Illuminate\Database\Seeder;
use App\ExchangeRate;
use App\CurrencyUnit;
use Carbon\Carbon;

class ExchangeRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Init Faker
        $faker = Faker\Factory::create();

        // Get all currency id to map into tbl_exchange_rate (foreign key)
        // Take out currency code to find MYR and set rate = 1
        $currencies = CurrencyUnit::select('id', 'currency_code')->get();
        //$currency_ids = $currencies->select('id', 'currency_code')->toArray();

        //$currency_ids = CurrencyUnit::pluck('id')->toArray();

        $days = 7;
        // Create record for each currency in tbl_exchange_rate
        foreach($currencies as $currency){
            // Loop how many days backward
            for($i=0; $i<$days; $i++){

                $buying_rate = $faker->randomFloat($nbMaxDecimals = 4, $min = 0, $max = 9);
                $selling_rate = $faker->randomFloat($nbMaxDecimals = 4, $min = 0, $max = 9);
                $middle_rate = $faker->randomFloat($nbMaxDecimals = 4, $min = 0, $max = 9);
                $currency_unit_id = $currency->id;

                if(strcmp($currency->currency_code, "MYR") == 0){
                    $buying_rate = 1;
                    $selling_rate = 1;
                    $middle_rate = 1;
                }
                ExchangeRate::firstOrCreate(
                    [
                    'created_at' => Carbon::now()->subDays($i)->toDateTimeString(),
                    'currency_unit_id' => $currency_unit_id,
                    'buying_rate' => $buying_rate,
                    'selling_rate' => $selling_rate,
                    'middle_rate' => $middle_rate
                    ]
                );
            }
        }        
    }
}
