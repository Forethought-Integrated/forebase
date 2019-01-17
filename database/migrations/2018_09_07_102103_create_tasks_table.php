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
            $table->string('task_lead_id')->nullable();
            $table->string('task_contact_id')->nullable();
            $table->string('task_campaign_id')->nullable();
            $table->string('task_account_id')->nullable();
            $table->string('task_subject')->nullable();
            $table->string('task_status')->nullable();
            $table->string('task_percentage')->nullable();
            $table->string('task_description')->nullable();
            $table->string('task_startdate')->nullable();
            $table->string('task_enddate')->nullable();
            $table->string('task_assignedto')->nullable();
            $table->string('task_assignedby')->nullable();
            $table->string('task_group')->nullable();              
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
