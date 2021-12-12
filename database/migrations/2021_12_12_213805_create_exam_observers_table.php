<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamObserversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_observers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('observer_id');
            $table->unsignedBigInteger('exam_id');
            $table->timestamps();

            $table->foreign('observer_id')
            ->references('id')
            ->on('observers')
            ->onDelete('cascade');

            $table->foreign('exam_id')
            ->references('id')
            ->on('exams')
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
        Schema::dropIfExists('exam_observers');
    }
}
