<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStarPlaysTable extends Migration
{
    public function up()
    {
        Schema::table('star_plays', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_7461661')->references('id')->on('users');
            $table->unsignedBigInteger('star_id')->nullable();
            $table->foreign('star_id', 'star_fk_7461662')->references('id')->on('stars');
        });
    }
}
