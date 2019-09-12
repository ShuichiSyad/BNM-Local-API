<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblExchangeRate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_exchange_rate', function (Blueprint $table) {
            $table->uuid('id')->primary(); // auto-generated unique ID
            $table->string('currency_unit_id'); // currency code
            $table->double('buying_rate',12,4); // buying rate
            $table->double('selling_rate',12,4); // selling rate
            $table->double('middle_rate',12,4)->nullable($value = true); // middle rate
            $table->timestamp('created_at')->useCurrent()->index(); // created at time
            
            $table->foreign('currency_unit_id')->references('id')->on('tbl_currency_unit'); // map column as foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_exchange_rate');
    }
}
