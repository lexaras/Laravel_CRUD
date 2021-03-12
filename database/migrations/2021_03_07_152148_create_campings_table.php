<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country', 64);
            $table->string('city', 64);
            $table->string('camping_name', 64);
            $table->decimal('rating', $precision = 4, $scale=2);
            $table->integer('number_of_reviews');
            $table->string('website', 255);
            $table->string('list', 8)->default('yes');
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
        Schema::dropIfExists('campings');
    }
}
