<?php

use Illuminate\Database\Seeder;
use App\CompanyShady;
use App\CompanyWebsite;

class CompanyWebsiteTableSeeder extends Seeder
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

        // Get all company_id to map into tbl_company_shady (foreign key)
        $company_ids = CompanyShady::pluck('id')->toArray();

        // Not looping all company_ids bcs we want some company to have null website
        $size = 53;
        for($i=0; $i<$size; $i++){
            CompanyWebsite::firstOrCreate(
                [
                'company_website' => $faker->url(),
                'company_shady_id' => $faker->randomElement($company_ids)
                ]
            );
        }

    }
}
