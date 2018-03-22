<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDsceStsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dsce_sts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('usn');
            $table->string('name');
            $table->integer('semester');
            $table->string('section');
            $table->string('subject');

            $table->integer('aat1ia1');
            $table->integer('aat2ia1');
            $table->integer('assignmentia1');
            $table->integer('cieia1');

            $table->integer('aat1ia2');
            $table->integer('aat2ia2');
            $table->integer('assignmentia2');
            $table->integer('cieia2');

            $table->integer('totalia1');
            $table->integer('totalia2');
            $table->integer('averageia');

            $table->integer('see');
            
            $table->integer('final');
            $table->string('grade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dsce_sts');
    }
}
