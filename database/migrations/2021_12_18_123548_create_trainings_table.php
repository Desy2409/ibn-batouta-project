<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('instruction_languages')->nullable();
            $table->longText('program')->nullable();
            $table->longText('faculty')->nullable();
            $table->longText('job')->nullable();
            $table->text('final_registration_fee')->nullable();
            $table->text('annual_registration_period')->nullable();
            $table->longText('tuition_fees')->nullable();
            $table->text('scholarship')->nullable();
            $table->text('number_of_students')->nullable();
            $table->text('target_social_category')->nullable();
            $table->nullableMorphs('trainingable');
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
        Schema::dropIfExists('trainings');
    }
}
