<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->string('weight',5);
            $table->string('bp');
            $table->string('pulse');
            $table->date('date');
            $table->foreignId('prescribe_medicine_id')->nullable();
            $table->foreignId('user_id');
            $table->string('additional_instructions')->nullable();
            $table->string('chief_complaint')->nullable();
            $table->string('history')->nullable();

         
           
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
        Schema::dropIfExists('prescriptions');
    }
}
