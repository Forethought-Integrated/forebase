<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTagManagerTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('file_tag_managers', function (Blueprint $table) {
            $table->increments('filemanager_id');
            $table->string('filemanager_name');
            $table->string('filemanager_description')->nullable();
            $table->string('filemanager_folderpath');
            $table->string('filemanager_filepath');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('file_tag_managers');
    }
}
