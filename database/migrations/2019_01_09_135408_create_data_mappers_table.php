<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataMappersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_mappers', function (Blueprint $table) {
            $table->increments('data_mappers_id');
            $table->string('table_name')->nullable();
            $table->string('field_name')->nullable();
            $table->string('mapping_table_name')->nullable();
            $table->string('mapping_field_name')->nullable();
            $table->string('mapping_platform')->nullable();
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
        Schema::dropIfExists('data_mappers');
    }
}
