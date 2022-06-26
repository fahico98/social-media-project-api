<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("videos", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("image_type")->nullable();
            $table->string("owner_type");
            $table->unsignedBigInteger("owner_id");
            $table->text("url")->nullable();
            $table->bigInteger("size")->nullable();
            $table->integer("duration")->nullagle();
            $table->string("file_name")->nullable();
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
        Schema::dropIfExists("videos");
    }
}
