<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarPlaysTable extends Migration
{
    public function up()
    {
        Schema::table('star_plays', function (Blueprint $table) {
            $table->boolean('confirmed')->default(0)->nullable();
        });
    }
}
