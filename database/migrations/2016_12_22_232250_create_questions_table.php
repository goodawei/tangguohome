<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('body');
            $table->integer('comments_count')->default(0);
            $table->integer('followers_count')->default(1);
            $table->integer('answers_count')->default(0);
            $table->string('close_comment',8)->default('F');
            $table->string('is_hidden',8)->default('H');
            $table->string('is_recommend',8)->default('N');
            $table->string('is_special',8)->default('N');
            $table->string('thum_picture')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
