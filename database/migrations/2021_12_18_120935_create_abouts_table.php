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
            $table->string('name')->nullable();
            $table->string('currency')->nullable();
            $table->string('geographic_location')->nullable();
            $table->string('email')->nullable();
            $table->string('web_site')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('bp')->nullable();
            $table->string('legal_situation')->nullable();
            $table->string('stopped')->nullable();
            $table->string('identity')->nullable();
            $table->string('vision')->nullable();
            $table->text('message')->nullable();
            $table->string('value')->nullable();
            $table->longText('goal')->nullable();
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
