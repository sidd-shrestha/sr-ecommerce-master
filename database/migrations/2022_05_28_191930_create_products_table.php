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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcategory_id');
            $table->string('product_code');
            $table->string('slug');
            $table->string('product_name');
            $table->string('product_image');
            $table->string('product_quantity');
            $table->string('product_price');
            $table->string('product_description');
            $table->string('sale_tag',50)->nullable();
            $table->string('offer_price',50)->nullable();
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('new_arrival_products')->default('0');
            $table->tinyInteger('featured_products')->default('0');
            $table->tinyInteger('offer_products')->default('0');
            $table->tinyInteger('trending')->default('0');
            $table->mediumText('meta_title')->nullable();
            $table->mediumText('meta_description')->nullable();
            $table->mediumText('meta_keyword')->nullable();
            $table->timestamps();
            // $table->foreign('subcategory_id')
            // ->references('id')->on('sub_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
