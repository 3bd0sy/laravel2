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
        Schema::create('course_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("course_id");
            $table->foreign("course_id")->references("id")->on("courses");

            $table->unsignedBigInteger("student_id");
            $table->foreign("student_id")->references("id")->on("students");
            $table->enum("status", ["pending","approve", "reject"])->default("pending");
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
        Schema::dropIfExists('course_student');
    }
};
