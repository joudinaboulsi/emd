<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('title_main')->nullable();
            $table->string('image')->nullable();
            $table->string('title_office')->nullable();
            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->string('location_url')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_url')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone2_url')->nullable();
            $table->string('phone3')->nullable();
            $table->string('phone3_url')->nullable();
            $table->string('title_location')->nullable();
            $table->string('location2')->nullable();
            $table->string('location2_url')->nullable();
            $table->string('phone4')->nullable();
            $table->string('phone4_url')->nullable();
            $table->string('phone5')->nullable();
            $table->string('phone5_url')->nullable();
            $table->text('map')->nullable();
           
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
        Schema::dropIfExists('contacts');
    }
}
