<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title_am');
            $table->string('title_en');
            $table->string('address_am');
            $table->string('address_en');
            $table->string('description_am');
            $table->string('description_en');
            $table->string('image');
            $table->foreignId('cat_id')
                  ->constrained('project_categories')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::table('project_categories', function (Blueprint $table) {
            $table->dropForeign(['cat_id']);
        });
        Schema::dropIfExists('projects');
    }
}
