<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        //camping_tag
        Schema::create('camping_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('camping_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            $table->unique(['camping_id', 'tag_id']);
            $table->foreign('camping_id')->references('id')->on('campings')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
