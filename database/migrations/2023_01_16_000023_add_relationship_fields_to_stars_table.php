<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStarsTable extends Migration
{
    public function up()
    {
        Schema::table('stars', function (Blueprint $table) {
            $table->unsignedBigInteger('award_id')->nullable();
            $table->foreign('award_id', 'award_fk_7465086')->references('id')->on('awards');
        });
    }
}
