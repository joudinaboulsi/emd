<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_s1')->nullable();
            $table->string('subtitle_s1')->nullable();
            $table->string('small_title_s1')->nullable();
            $table->string('image_s1')->nullable();
            $table->string('alt_s1')->nullable();
            $table->string('title_s2')->nullable();
            $table->string('subtitle_s2')->nullable();
            $table->text('text_s2')->nullable();
            $table->string('icon')->nullable();
            $table->string('alt')->nullable();
            $table->string('icon2')->nullable();
            $table->string('alt2')->nullable();
            $table->string('icon3')->nullable();
            $table->string('alt3')->nullable();
            $table->string('icon4')->nullable();
            $table->string('alt4')->nullable();
            $table->string('p')->nullable();
            $table->string('p2')->nullable();
            $table->string('p3')->nullable();
            $table->string('p4')->nullable();
            $table->string('title_product')->nullable();
            $table->text('text_product')->nullable();

            $table->string('small_title_product')->nullable();
            $table->string('text2_product')->nullable();

           
            $table->string('subtitle_s3')->nullable();
            $table->string('title_s3')->nullable();
            $table->string('title2_s3')->nullable();
            $table->string('title3_s3')->nullable();
            $table->string('link_s3')->nullable();
            $table->string('url_s3')->nullable();
            $table->string('link2_s3')->nullable();
           
            $table->string('link3_s3')->nullable();
            $table->string('url3_s3')->nullable();
            $table->string('li')->nullable();
            $table->string('li2')->nullable();
            $table->string('li3')->nullable();
            $table->string('li4')->nullable();
            $table->string('li5')->nullable();
            $table->string('li6')->nullable();
            $table->string('li7')->nullable();
            $table->string('li8')->nullable();
            $table->string('li9')->nullable();
            $table->string('li10')->nullable();
            $table->string('li11')->nullable();
            $table->string('li12')->nullable();
            $table->string('li13')->nullable();
            $table->string('li14')->nullable();
            $table->string('li15')->nullable();
          

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
        Schema::dropIfExists('abouts');
    }
}
