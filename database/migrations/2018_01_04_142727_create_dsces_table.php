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
            $table->integer('zero1'); $table->integer('zero2'); $table->integer('zero3'); $table->integer('zero4'); $table->integer('zero5'); $table->integer('zero6'); $table->integer('zero7'); $table->integer('zero8'); $table->integer('zero9'); $table->integer('zero10'); $table->integer('zero11'); $table->integer('zero12'); $table->integer('one1'); $table->integer('one2'); $table->integer('one3'); $table->integer('one4'); $table->integer('one5'); $table->integer('one6'); $table->integer('one7'); $table->integer('one8'); $table->integer('one9'); $table->integer('one10'); $table->integer('one11'); $table->integer('one12'); $table->integer('two1'); $table->integer('two2'); $table->integer('two3'); $table->integer('two4'); $table->integer('two5'); $table->integer('two6'); $table->integer('two7'); $table->integer('two8'); $table->integer('two9'); $table->integer('two10'); $table->integer('two11'); $table->integer('two12'); $table->integer('three1'); $table->integer('three2'); $table->integer('three3'); $table->integer('three4'); $table->integer('three5'); $table->integer('three6'); $table->integer('three7'); $table->integer('three8'); $table->integer('three9'); $table->integer('three10'); $table->integer('three11'); $table->integer('three12'); $table->integer('four1'); $table->integer('four2'); $table->integer('four3'); $table->integer('four4'); $table->integer('four5'); $table->integer('four6'); $table->integer('four7'); $table->integer('four8'); $table->integer('four9'); $table->integer('four10'); $table->integer('four11'); $table->integer('four12'); $table->integer('five1'); $table->integer('five2'); $table->integer('five3'); $table->integer('five4'); $table->integer('five5'); $table->integer('five6'); $table->integer('five7'); $table->integer('five8'); $table->integer('five9'); $table->integer('five10'); $table->integer('five11'); $table->integer('five12'); $table->integer('six1'); $table->integer('six2'); $table->integer('six3'); $table->integer('six4'); $table->integer('six5'); $table->integer('six6'); $table->integer('six7'); $table->integer('six8'); $table->integer('six9'); $table->integer('six10'); $table->integer('six11'); $table->integer('six12'); $table->integer('m1'); $table->integer('m2'); $table->integer('m3'); $table->integer('m4'); $table->integer('m5'); $table->integer('m6'); $table->integer('m7'); $table->integer('m8'); $table->integer('m9'); $table->integer('m10'); $table->integer('m11'); $table->integer('m12');
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
