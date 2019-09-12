<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblBankBaseRate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bank_base_rate', function (Blueprint $table) {
            $table->string('bank_code')->primary(); // company name
            $table->string('bank_name'); // registration number
            $table->double('base_rate',4,2); // buying rate
            $table->double('base_financing_rate',4,2); // buying rate
            $table->double('indicative_eff_lending_rate',4,2); // buying rate
            $table->timestamp('update_date')->useCurrent(); // data created at time
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_bank_base_rate');
    }
}
