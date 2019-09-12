<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCompanyShady extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company_shady', function (Blueprint $table) {
            $table->uuid('id')->primary(); // auto-generated unique ID
            $table->string('company_name'); // company name
            $table->string('registration_number'); // registration number
            $table->timestamp('added_date')->useCurrent(); // data created at time
        });

        DB::statement('ALTER TABLE tbl_company_shady ADD FULLTEXT search(company_name)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_company_shady');
    }
}
