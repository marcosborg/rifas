<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEntitiesTable extends Migration
{
    public function up()
    {
        Schema::table('entities', function (Blueprint $table) {
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->foreign('sub_category_id', 'sub_category_fk_7879808')->references('id')->on('sub_categories');
        });
    }
}
