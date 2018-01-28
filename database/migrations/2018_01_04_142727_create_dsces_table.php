<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDscesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dsces', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->integer('zero1')->nullable(); $table->integer('zero2')->nullable(); $table->integer('zero3')->nullable(); $table->integer('zero4')->nullable(); $table->integer('zero5')->nullable(); $table->integer('zero6')->nullable(); $table->integer('zero7')->nullable(); $table->integer('zero8')->nullable(); $table->integer('zero9')->nullable(); $table->integer('zero10')->nullable(); $table->integer('zero11')->nullable(); $table->integer('zero12')->nullable(); $table->integer('one1')->nullable(); $table->integer('one2')->nullable(); $table->integer('one3')->nullable(); $table->integer('one4')->nullable(); $table->integer('one5')->nullable(); $table->integer('one6')->nullable(); $table->integer('one7')->nullable(); $table->integer('one8')->nullable(); $table->integer('one9')->nullable(); $table->integer('one10')->nullable(); $table->integer('one11')->nullable(); $table->integer('one12')->nullable(); $table->integer('two1')->nullable(); $table->integer('two2')->nullable(); $table->integer('two3')->nullable(); $table->integer('two4')->nullable(); $table->integer('two5')->nullable(); $table->integer('two6')->nullable(); $table->integer('two7')->nullable(); $table->integer('two8')->nullable(); $table->integer('two9')->nullable(); $table->integer('two10')->nullable(); $table->integer('two11')->nullable(); $table->integer('two12')->nullable(); $table->integer('three1')->nullable(); $table->integer('three2')->nullable(); $table->integer('three3')->nullable(); $table->integer('three4')->nullable(); $table->integer('three5')->nullable(); $table->integer('three6')->nullable(); $table->integer('three7')->nullable(); $table->integer('three8')->nullable(); $table->integer('three9')->nullable(); $table->integer('three10')->nullable(); $table->integer('three11')->nullable(); $table->integer('three12')->nullable(); $table->integer('four1')->nullable(); $table->integer('four2')->nullable(); $table->integer('four3')->nullable(); $table->integer('four4')->nullable(); $table->integer('four5')->nullable(); $table->integer('four6')->nullable(); $table->integer('four7')->nullable(); $table->integer('four8')->nullable(); $table->integer('four9')->nullable(); $table->integer('four10')->nullable(); $table->integer('four11')->nullable(); $table->integer('four12')->nullable(); $table->integer('five1')->nullable(); $table->integer('five2')->nullable(); $table->integer('five3')->nullable(); $table->integer('five4')->nullable(); $table->integer('five5')->nullable(); $table->integer('five6')->nullable(); $table->integer('five7')->nullable(); $table->integer('five8')->nullable(); $table->integer('five9')->nullable(); $table->integer('five10')->nullable(); $table->integer('five11')->nullable(); $table->integer('five12')->nullable(); $table->integer('m1')->nullable(); $table->integer('m2')->nullable(); $table->integer('m3')->nullable(); $table->integer('m4')->nullable(); $table->integer('m5')->nullable(); $table->integer('m6')->nullable(); $table->integer('m7')->nullable(); $table->integer('m8')->nullable(); $table->integer('m9')->nullable(); $table->integer('m10')->nullable(); $table->integer('m11')->nullable(); $table->integer('m12')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dsces');
    }
}
