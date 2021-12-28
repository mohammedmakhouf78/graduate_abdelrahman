<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommittiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('floor_id')->nullable();
            $table->integer('start_from');
            $table->integer('end_to');
            $table->timestamps();


            $table->foreign('floor_id')
            ->references('id')
            ->on('floors')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('committies');
    }
}
