<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCompanyWebsite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company_website', function (Blueprint $table) {
            $table->uuid('id')->primary(); // auto-generated unique ID
            $table->uuid('company_shady_id'); // auto-generated unique ID
            $table->text('company_website'); // company_website

            $table->foreign('company_shady_id')->references('id')->on('tbl_company_shady'); // map column as foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_company_website');
    }
}
