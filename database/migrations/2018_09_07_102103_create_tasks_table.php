<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *   
     * @return void
     */
    public function up()
    {



        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('task_id');
            $table->string('task_lead_id')->nullable($value = true);
            $table->string('task_contact_id')->nullable($value = true);
            $table->string('task_campaign_id')->nullable($value = true);
            $table->string('task_account_id')->nullable($value = true);
            $table->string('task_subject')->nullable($value = true);
            $table->string('task_status')->nullable($value = true);
            $table->string('task_percentage')->nullable($value = true);
            $table->string('task_description')->nullable($value = true);
            $table->string('task_startdate')->nullable($value = true);
            $table->string('task_enddate')->nullable($value = true);
            $table->string('task_assignedto')->nullable($value = true);
            $table->string('task_assignedby')->nullable($value = true);
            $table->string('task_group')->nullable($value = true);              
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
        Schema::dropIfExists('tasks');
    }
}
