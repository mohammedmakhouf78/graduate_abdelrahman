<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamMarkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_markings', function (Blueprint $table) {
            $table->id();
            $table->float('degree');
            $table->date('marking_date');
            $table->unsignedBigInteger('exam_id');
            $table->timestamps();

            $table->foreign('exam_id')
            ->references('id')
            ->on('exams')
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
        Schema::dropIfExists('exam_markings');
    }
}
