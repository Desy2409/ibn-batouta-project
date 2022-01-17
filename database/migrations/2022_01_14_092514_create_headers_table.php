<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('home')->nullable()->default('Aucune valeure définie');
            $table->string('iaib')->nullable()->default('Aucune valeure définie');
            $table->string('opportunity')->nullable()->default('Aucune valeure définie');
            $table->string('training')->nullable()->default('Aucune valeure définie');
            $table->string('team')->nullable()->default('Aucune valeure définie');
            $table->string('press')->nullable()->default('Aucune valeure définie');
            $table->string('contact')->nullable()->default('Aucune valeure définie');
            // $table->string('language')->nullable();
            $table->nullableMorphs('headerable');
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
        Schema::dropIfExists('headers');
    }
}
