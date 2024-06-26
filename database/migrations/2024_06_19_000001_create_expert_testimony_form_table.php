<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertTestimonyFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_testimony_form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('expert_testimony')->nullable();
            $table->string('your_role', 255)->nullable();
            $table->string('type_of_case', 255)->nullable();
            $table->string('type_of_case_others', 255)->nullable();
            $table->longText('photos')->nullable();
            $table->string('brief_overview_of_case', 255)->nullable();
            $table->string('appoinment_date', 255)->nullable();
            $table->string('appoinment_time', 255)->nullable();
            $table->string('appoinment_type', 255)->nullable();
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
        Schema::dropIfExists('expert_testimony_form');
    }
}
