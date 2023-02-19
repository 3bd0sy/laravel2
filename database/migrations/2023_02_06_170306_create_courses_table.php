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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cat_id");
            $table->foreign("cat_id")->references("id")->on("cats");
            $table->unsignedBigInteger("trianer_id");
            $table->foreign("trianer_id")->references("id")->on("trianers");
            $table->string("small_desc");
            $table->text("desc");
            $table->integer("price");
            $table->string("img");
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
        Schema::dropIfExists('courses');
    }
};
