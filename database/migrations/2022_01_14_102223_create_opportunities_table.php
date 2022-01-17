<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->longText('opportunity_information')->nullable()->default('Aucune valeure définie');
            $table->text('scholarship')->nullable()->default('Aucune valeure définie');
            $table->text('adapted_curricula')->nullable()->default('Aucune valeure définie');
            $table->text('teaching_modality')->nullable()->default('Aucune valeure définie');
            $table->text('future_job')->nullable()->default('Aucune valeure définie');
            $table->text('multimedia_center')->nullable()->default('Aucune valeure définie');
            $table->text('choice_partnership')->nullable()->default('Aucune valeure définie');
            $table->nullableMorphs('opportunityable');
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
        Schema::dropIfExists('opportunities');
    }
}
