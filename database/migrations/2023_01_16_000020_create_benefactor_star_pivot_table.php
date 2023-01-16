<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefactorStarPivotTable extends Migration
{
    public function up()
    {
        Schema::create('benefactor_star', function (Blueprint $table) {
            $table->unsignedBigInteger('star_id');
            $table->foreign('star_id', 'star_id_fk_7879837')->references('id')->on('stars')->onDelete('cascade');
            $table->unsignedBigInteger('benefactor_id');
            $table->foreign('benefactor_id', 'benefactor_id_fk_7879837')->references('id')->on('benefactors')->onDelete('cascade');
        });
    }
}
