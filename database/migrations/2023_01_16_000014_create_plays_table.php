<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaysTable extends Migration
{
    public function up()
    {
        Schema::create('plays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type');
            $table->integer('play');
            $table->integer('selection');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
