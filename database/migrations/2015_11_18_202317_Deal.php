<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Deal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('deals');
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('list_price');
            $table->integer('deal_amount');
            $table->unsignedBigInteger('deal_price');
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('time_expired');
            $table->longText('description');
            $table->unsignedInteger('partner_id');
            $table->string('location');
            $table->text('noted');
            $table->foreign('partner_id')->references('id')->on('partners');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deals', function (Blueprint $table) {
            //
        });
    }
}
