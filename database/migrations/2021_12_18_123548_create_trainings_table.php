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
            $table->string('instruction_languages')->nullable()->default('Aucune valeure définie');
            $table->longText('program')->nullable()->default('Aucune valeure définie');
            $table->longText('faculty')->nullable()->default('Aucune valeure définie');
            $table->longText('job')->nullable()->default('Aucune valeure définie');
            $table->text('final_registration_fee')->nullable()->default('Aucune valeure définie');
            $table->text('annual_registration_period')->nullable()->default('Aucune valeure définie');
            $table->longText('tuition_fees')->nullable()->default('Aucune valeure définie');
            $table->text('scholarship')->nullable()->default('Aucune valeure définie');
            $table->text('number_of_students')->nullable()->default('Aucune valeure définie');
            $table->text('target_social_category')->nullable()->default('Aucune valeure définie');
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
