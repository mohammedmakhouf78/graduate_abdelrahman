<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('exam_date');
            $table->float('full_mark');
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('squad_id')->nullable();
            $table->unsignedBigInteger('professor_id')->nullable();
            $table->unsignedBigInteger('professor_assistant_id')->nullable();
            $table->timestamps();

            $table->foreign('subject_id')
                ->references('id')
                ->on('subjects')
                ->onDelete('set null');

            $table->foreign('department_id')
                ->references('id')
                ->on('departments')
                ->onDelete('set null');

            $table->foreign('squad_id')
                ->references('id')
                ->on('squads')
                ->onDelete('set null');

            $table->foreign('professor_id')
                ->references('id')
                ->on('professors')
                ->onDelete('set null');

            $table->foreign('professor_assistant_id')
                ->references('id')
                ->on('professor_assistants')
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
        Schema::dropIfExists('exams');
    }
}
