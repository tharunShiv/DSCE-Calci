<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDsce1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dsce1s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->integer('zero1')->nullable();
            $table->integer('zero2')->nullable();
            $table->integer('zero3')->nullable();
            $table->integer('m1')->nullable();
            $table->integer('one1')->nullable();
            $table->integer('one2')->nullable();
            $table->integer('one3')->nullable();
            $table->integer('m2')->nullable();
            $table->integer('two1')->nullable();
            $table->integer('two2')->nullable();
            $table->integer('two3')->nullable();
            $table->integer('three1')->nullable();
            $table->integer('three2')->nullable();
            $table->integer('three3')->nullable();
            $table->integer('four1')->nullable();
            $table->integer('four2')->nullable();
            $table->integer('four3')->nullable();
            $table->integer('five1')->nullable();
            $table->integer('five2')->nullable();
            $table->integer('five3')->nullable();
            $table->integer('m3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dsce1s');
    }
}
