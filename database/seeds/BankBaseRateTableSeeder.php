<?php

use Illuminate\Database\Seeder;
use App\BankBaseRate;

class BankBaseRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bank_base_rates = [
            ['bank_code' => 'BKKBMYKL', 'bank_name' => 'Bangkok Bank Berhad', 'base_rate' => 4.47, 'base_financing_rate' => 7.14, 'indicative_eff_lending_rate' => 5.67],
            ['bank_code' => 'CIBBMYKL', 'bank_name' => 'CIMB Bank Berhad', 'base_rate' => 4, 'base_financing_rate' => 6.85, 'indicative_eff_lending_rate' => 4.75],
            ['bank_code' => 'CITIMYKL', 'bank_name' => 'Citibank Berhad', 'base_rate' => 3.65, 'base_financing_rate' => 6.8, 'indicative_eff_lending_rate' => 4.45],
            ['bank_code' => 'HLBBMYKL', 'bank_name' => 'Hong Leong Bank Malaysia Berhad', 'base_rate' => 3.88, 'base_financing_rate' => 6.89, 'indicative_eff_lending_rate' => 4.75],
            ['bank_code' => 'HBMBMYKL', 'bank_name' => 'HSBC Bank Malaysia Berhad', 'base_rate' => 3.64, 'base_financing_rate' => 6.74, 'indicative_eff_lending_rate' => 4.75],
            ['bank_code' => 'ICBKMYKL', 'bank_name' => 'Industrial and Commercial Bank of China (Malaysia) Berhad', 'base_rate' => 3.77, 'base_financing_rate' => 6.7, 'indicative_eff_lending_rate' => 4.6],
            ['bank_code' => 'MBBEMYKL', 'bank_name' => 'Malayan Banking Berhad', 'base_rate' => 3, 'base_financing_rate' => 6.65, 'indicative_eff_lending_rate' => 4.35],
            ['bank_code' => 'OCBCMYKL', 'bank_name' => 'OCBC Bank (Malaysia) Berhad', 'base_rate' => 3.83, 'base_financing_rate' => 6.76, 'indicative_eff_lending_rate' => 4.7],
            ['bank_code' => 'PBBEMYKL', 'bank_name' => 'Public Bank Berhad', 'base_rate' => 3.52, 'base_financing_rate' => 6.72, 'indicative_eff_lending_rate' => 4.35],
            ['bank_code' => 'RHBBMYKL', 'bank_name' => 'RHB Bank Berhad', 'base_rate' => 3.75, 'base_financing_rate' => 6.7, 'indicative_eff_lending_rate' => 4.75],
            ['bank_code' => 'AIBBMYKL', 'bank_name' => 'Affin Islamic Bank Berhad', 'base_rate' => 3.95, 'base_financing_rate' => 6.7, 'indicative_eff_lending_rate' => 4.76],
            ['bank_code' => 'ALSRMYKL', 'bank_name' => 'Alliance Islamic Bank Berhad', 'base_rate' => 3.82, 'base_financing_rate' => 6.67, 'indicative_eff_lending_rate' => 4.36]
        ];

        foreach($bank_base_rates as $bank_base_rate){
            // Insert data into table, avoid multiple insert
            BankBaseRate::firstOrCreate($bank_base_rate);
        }
    }
}
