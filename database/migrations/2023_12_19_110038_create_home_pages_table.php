<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_s1')->nullable();
            $table->string('subtitle_s1')->nullable();
            $table->text('text_s1')->nullable();
            $table->string('image_s1')->nullable();
            $table->string('alt_s1')->nullable();
            $table->string('image_title')->nullable();
            $table->string('count')->nullable();
            $table->string('count_title')->nullable();
            $table->string('count2')->nullable();
            $table->string('count_title2')->nullable();
            $table->string('count3')->nullable();
            $table->string('count_title3')->nullable();
            $table->string('count4')->nullable();
            $table->string('count_title4')->nullable();
            $table->string('youtube')->nullable();
            $table->string('link')->nullable();
            $table->string('link_url')->nullable();
            $table->string('small_title')->nullable();
            $table->string('small_title2')->nullable();
            $table->string('subtitle_product')->nullable();
            $table->string('title_product')->nullable();
            
            $table->string('subtitle_news')->nullable();
            $table->string('title_news')->nullable();
            $table->string('title_client')->nullable();
           
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
        Schema::dropIfExists('home_pages');
    }
}
