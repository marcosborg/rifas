<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToNumbersTable extends Migration
{
    public function up()
    {
        Schema::table('numbers', function (Blueprint $table) {
            $table->unsignedBigInteger('award_id')->nullable();
            $table->foreign('award_id', 'award_fk_7465256')->references('id')->on('awards');
            $table->unsignedBigInteger('benefactor_id')->nullable();
            $table->foreign('benefactor_id', 'benefactor_fk_7465257')->references('id')->on('benefactors');
        });
    }
}
