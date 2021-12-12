<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorProfessorAssistantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor_professor_assistants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professor_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('professor_assistant_id');
            $table->timestamps();

            $table->foreign('professor_id')
            ->references('id')
            ->on('professors')
            ->onDelete('cascade');

            $table->foreign('subject_id')
            ->references('id')
            ->on('subjects')
            ->onDelete('cascade');

            $table->foreign('professor_assistant_id')
            ->references('id')
            ->on('professor_assistants')
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
        Schema::dropIfExists('professor_professor_assistants');
    }
}
