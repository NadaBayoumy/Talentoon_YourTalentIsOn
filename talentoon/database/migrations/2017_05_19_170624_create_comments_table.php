<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('comments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('text');

            $table->integer('user_id')->unsigned();
            $table->integer('commentable_id')->unsigned();

            $table->string('commentable_type');
            $table->timestamps();
//
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//            $table->foreign('commentable_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('comments');
    }
}
