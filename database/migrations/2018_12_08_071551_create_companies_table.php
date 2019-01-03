<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('company_id');
            $table->string('company_name')->nullable();
            $table->text('company_registration_address')->nullable();
            $table->string('company_state')->nullable();
            $table->string('company_country')->nullable();
            $table->string('company_pincode')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_phone_no')->nullable();
            $table->string('company_primary_contact')->nullable();
            $table->string('company_secondary_contact')->nullable();
            $table->string('company_pan_no')->nullable();
            $table->string('company_registration_no')->nullable();
            $table->text('company_overview')->nullable();
            $table->string('company_industry')->nullable();
            $table->string('company_website')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
