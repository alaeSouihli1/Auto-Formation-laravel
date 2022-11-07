<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brief_apprenants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_brief')->unsigned();
            $table->bigInteger('id_apprenant')->unsigned();

            $table->foreign('id_brief')->references('id')->on('briefs')->onDelete('cascade');
            $table->foreign('id_apprenant')->references('id')->on('apprenants')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brief_apprenants');
    }
};
