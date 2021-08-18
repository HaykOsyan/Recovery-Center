<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('name_am');
            $table->string('name_en');
            $table->string('surname_am');
            $table->string('surname_en');
            $table->string('image');
            $table->string('about_am');
            $table->string('about_en');
            $table->string('link_inst');
            $table->string('link_tw');
            $table->string('link_fb');
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
        Schema::dropIfExists('team');
    }
}
