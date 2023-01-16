<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarsTable extends Migration
{
    public function up()
    {
        Schema::create('stars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->decimal('donation', 15, 2);
            $table->integer('limit');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
