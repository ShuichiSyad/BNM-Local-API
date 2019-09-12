<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\CompanyShady::class, function (Faker $faker) {
    return [
        'company_name' => $faker->text(30) . ' Sdn. Bhd.',
        'registration_number' => $faker->randomNumber($nbDigits = NULL, $strict = false)
    ];
});
