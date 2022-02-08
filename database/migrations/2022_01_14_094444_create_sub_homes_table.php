<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_homes', function (Blueprint $table) {
            $table->id();
            $table->string('sub_title')->nullable()->default('Aucune valeure définie');
            $table->longText('sub_description')->nullable()->default('Aucune valeure définie');
            $table->nullableMorphs('subhomeable');
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
        Schema::dropIfExists('sub_homes');
    }
}
