<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("users", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name", 75);
            $table->string("email", 50)->unique();
            $table->string("username", 50)->unique();
            $table->string("profile_picture_url")->default("");
            $table->string("cover_picture_url")->default("");
            $table->unsignedBigInteger("role_id")->default(1);
            $table->string("biography")->nullable();
            $table->string("location", 50)->nullable();
            $table->string("birthplace", 50)->nullable();
            $table->enum("marital_status", ["none", "single", "engaged", "married"]);
            $table->string("password");
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
        Schema::dropIfExists("users");
    }
}
