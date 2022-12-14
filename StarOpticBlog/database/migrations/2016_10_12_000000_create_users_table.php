<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
                  $table->bigIncrements("id");
                  $table->string("first_name", "20");
                  $table->string("last_name", "20");
                  $table->string("username", "30")->unique();
                  $table->string("email", "60")->unique();
                  $table->string("password", "255");
                  $table->timestamps();
                  $table->foreignId("role_id")->references("id")->on("roles");
                  $table->rememberToken();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
