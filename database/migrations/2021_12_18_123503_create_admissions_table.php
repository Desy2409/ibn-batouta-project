<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('annual_registration_period')->nullable()->default('Aucune valeure définie');
            $table->string('general_requirement')->nullable()->default('Aucune valeure définie');
            $table->string('documents_to_provide')->nullable()->default('Aucune valeure définie');
            $table->string('assessment_test')->nullable()->default('Aucune valeure définie');
            $table->string('compulsory_fees')->nullable()->default('Aucune valeure définie');
            $table->nullableMorphs('admissionable');
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
        Schema::dropIfExists('admission_requirements');
    }
}
