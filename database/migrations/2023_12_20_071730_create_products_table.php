<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_header')->nullable();
            $table->string('title_header')->nullable();
            $table->string('subtitle_header')->nullable();
            $table->string('name_product')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->text('desc1')->nullable();
            $table->text('desc2')->nullable();
            $table->string('small_title_components')->nullable();
            
            $table->string('category1')->nullable();
            $table->string('category2')->nullable();
            $table->string('category3')->nullable();
            $table->string('category4')->nullable();
            $table->string('tag1')->nullable();
            $table->string('tag2')->nullable();
            $table->string('tag3')->nullable();
            $table->string('tag4')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('og_image')->nullable();
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
        Schema::dropIfExists('products');
    }
}
