<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_salary', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            
            $table->integer('salary')->default(0);
            $table->string('salary_in_currency', 16)->nullable();
            $table->string('is_salary_negotiable', 16)->nullable();

            $table->foreign('job_id')->references('id')->on('job')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_salary');
    }
}
