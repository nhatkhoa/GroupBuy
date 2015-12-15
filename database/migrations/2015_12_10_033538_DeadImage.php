<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeadImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('deal_id');
            $table->foreign('deal_id')->references('id')->on('deals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deal_images', function (Blueprint $table) {
            //
        });
    }
}
