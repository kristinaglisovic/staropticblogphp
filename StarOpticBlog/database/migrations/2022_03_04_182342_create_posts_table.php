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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('title',60)->unique();
            $table->string('main_text',255);
            $table->string('subtitle',50);
            $table->string('subtitle_text1',255);
            $table->string('subtitle_text2',255)->nullable();
            $table->string('quote',100)->nullable();
            $table->string('main_photo',200);
            $table->string('alt',20);
            $table->integer('visit_count')->default(0);
            //kada obrisemo autora(usera) brise se i njegov post
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            //kada obrisemo kategorije brisu se i svi postovi koji su pripadali toj kategoriji
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
};
