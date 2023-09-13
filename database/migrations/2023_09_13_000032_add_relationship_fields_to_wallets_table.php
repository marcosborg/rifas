<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToWalletsTable extends Migration
{
    public function up()
    {
        Schema::table('wallets', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_8996567')->references('id')->on('users');
            $table->unsignedBigInteger('play_id')->nullable();
            $table->foreign('play_id', 'play_fk_8996568')->references('id')->on('plays');
        });
    }
}
