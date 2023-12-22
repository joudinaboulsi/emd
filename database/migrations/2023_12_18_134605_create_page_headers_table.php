<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_headers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('page_name')->nullable();
            $table->string('image_header')->nullable();
            $table->string('title_header')->nullable();
            $table->string('subtitle_header')->nullable();
            $table->string('related')->nullable();
            $table->text('text_product')->nullable();
            $table->text('link_video')->nullable();
            $table->text('image_marketing')->nullable();
         

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
        Schema::dropIfExists('page_headers');
    }
}
