<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenementen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naam', 50);
            $table->text('beschrijving');
            $table->text('samenvatting');
            $table->string('locatie', 50);
            $table->date('datum');
            $table->time('begintijd');
            $table->time('eindtijd');
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
        Schema::dropIfExists('evenementen');
    }
}
