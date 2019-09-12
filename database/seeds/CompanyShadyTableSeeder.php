<?php

use Illuminate\Database\Seeder;

class CompanyShadyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CompanyShady::class, 40)->create();
    }
}
