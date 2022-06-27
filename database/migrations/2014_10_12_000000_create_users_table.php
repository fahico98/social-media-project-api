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
            $table->enum("gender", ["male", "female"])->nullable();
            $table->string("password");
            $table->unsignedBigInteger("role_id")->default(1);
            $table->string("biography")->nullable();
            $table->string("location", 50)->nullable();
            $table->date("birthday", 250)->nullable();
            $table->enum("marital_status", ["none", "single", "engaged", "married"]);
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
