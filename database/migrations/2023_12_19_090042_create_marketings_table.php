<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->string('title')->nullable();
            $table->string('item')->nullable();
            $table->string('item_value')->nullable();
            $table->string('price_value')->nullable();
            $table->string('price')->nullable();
            $table->string('title_modal')->nullable();
            $table->text('text_modal')->nullable();
            $table->string('image2')->nullable();
            $table->string('alt2')->nullable();

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
        Schema::dropIfExists('marketings');
    }
}
