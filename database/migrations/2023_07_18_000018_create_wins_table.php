<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinsTable extends Migration
{
    public function up()
    {
        Schema::create('wins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
