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
            $table->string('patient_id',10);
            $table->string('patient_name',255);
            $table->string('gender');
            $table->string('weight',5);
            $table->string('age',5);
            $table->string('bp');
            $table->date('date');
            $table->string('medicine_id');
            $table->string('diagnosis_id');
            $table->string('additional_instructions')->nullable();
         
           
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
