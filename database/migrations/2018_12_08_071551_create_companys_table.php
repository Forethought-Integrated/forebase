<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->increments('company_id');
            $table->string('company_name');
            $table->text('company_registered_address');
            $table->string('company_state');
            $table->string('company_country');
            $table->string('company_pincode');
            $table->string('company_email');
            $table->string('company_phone_no');
            $table->string('company_primary_contact');
            $table->string('company_secondary_contact');
            $table->string('company_pan_no');
            $table->string('company_registeration_no');
            $table->text('company_overview');
            $table->string('company_industry');
            $table->string('company_website');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companys');
    }
}
