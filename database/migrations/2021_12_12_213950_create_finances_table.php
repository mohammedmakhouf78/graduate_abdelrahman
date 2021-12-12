<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->id();
            $table->float('total');
            $table->float('fixed_money');
            $table->float('changable_money');
            $table->float('discount');
            $table->float('deserved_money');
            $table->unsignedBigInteger('squad_id');
            $table->timestamps();

            $table->foreign('squad_id')
            ->references('id')
            ->on('squads')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finances');
    }
}
