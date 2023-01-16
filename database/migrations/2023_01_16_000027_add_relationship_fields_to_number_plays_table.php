<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToNumberPlaysTable extends Migration
{
    public function up()
    {
        Schema::table('number_plays', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_7461701')->references('id')->on('users');
            $table->unsignedBigInteger('number_id')->nullable();
            $table->foreign('number_id', 'number_fk_7461702')->references('id')->on('numbers');
        });
    }
}
