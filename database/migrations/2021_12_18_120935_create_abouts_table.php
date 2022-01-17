<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default('Aucune valeure définie');
            $table->string('currency')->nullable()->default('Aucune valeure définie');
            $table->string('geographic_location')->nullable()->default('Aucune valeure définie');
            $table->string('email')->nullable()->default('Aucune valeure définie');
            $table->string('web_site')->nullable()->default('Aucune valeure définie');
            $table->string('phone_number')->nullable()->default('Aucune valeure définie');
            $table->string('bp')->nullable()->default('Aucune valeure définie');
            $table->string('legal_situation')->nullable()->default('Aucune valeure définie');
            $table->string('stopped')->nullable()->default('Aucune valeure définie');
            $table->string('identity')->nullable()->default('Aucune valeure définie');
            $table->longText('mission')->nullable()->default('Aucune valeure définie');
            $table->longText('plan')->nullable()->default('Aucune valeure définie');
            $table->longText('vision')->nullable()->default('Aucune valeure définie');
            $table->text('message')->nullable()->default('Aucune valeure définie');
            $table->text('value')->nullable()->default('Aucune valeure définie');
            $table->longText('goal')->nullable()->default('Aucune valeure définie');
            $table->nullableMorphs('aboutable');
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
        Schema::dropIfExists('abouts');
    }
}
