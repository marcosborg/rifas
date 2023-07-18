<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToWinsTable extends Migration
{
    public function up()
    {
        Schema::table('wins', function (Blueprint $table) {
            $table->unsignedBigInteger('star_id')->nullable();
            $table->foreign('star_id', 'star_fk_8766987')->references('id')->on('stars');
            $table->unsignedBigInteger('star_play_id')->nullable();
            $table->foreign('star_play_id', 'star_play_fk_8766988')->references('id')->on('star_plays');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_8766989')->references('id')->on('users');
        });
    }
}
