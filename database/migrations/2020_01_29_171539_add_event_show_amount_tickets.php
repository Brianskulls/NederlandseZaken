<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEventShowAmountTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evenementen', function (Blueprint $table) {
            $table->boolean('laatAantalTicketsZien');
            $table->integer('aantalGekochteTickets')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evenementen', function (Blueprint $table) {
            $table->dropColumn('laatAantalTicketsZien');
            $table->dropColumn('aantalGekochteTickets');
        });
    }
}
