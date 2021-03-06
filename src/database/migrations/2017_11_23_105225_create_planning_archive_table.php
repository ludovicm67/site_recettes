<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanningArchiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planning_archive', function (Blueprint $table) {
            $table->dateTime('at');
            $table->unsignedInteger('id_users');
            $table->unsignedInteger('id_recettes');

            $table->foreign('id_recettes')->references('id')->on('recettes');
            $table->foreign('id_users')->references('id')->on('users');
            $table->primary(['id_recettes', 'id_users']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planning_archive');
    }
}
