<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesProductsPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_products_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id')
                    ->constrained('categories')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('property_id')
                    ->constrained('properties')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('prop_item_id')
                    ->constrained('property_items')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('product_id')
                    ->constrained('products')
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
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign(['cat_id']);
        });
        Schema::table('properties', function (Blueprint $table) {
            $table->dropForeign(['property_id']);
        });
        Schema::table('property_items', function (Blueprint $table) {
            $table->dropForeign(['prop_item_id']);
        });
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
        });
        Schema::dropIfExists('categories_products_properties');
    }
}
