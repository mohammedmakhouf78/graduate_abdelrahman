<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('squad_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('subject_id1')->nullable();
            $table->unsignedBigInteger('subject_id2')->nullable();
            $table->unsignedBigInteger('subject_id3')->nullable();
            $table->timestamps();

            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('set null');

            $table->foreign('subject_id1')
                ->references('id')
                ->on('subjects')
                ->onDelete('set null');

            $table->foreign('subject_id2')
                ->references('id')
                ->on('subjects')
                ->onDelete('set null');

            $table->foreign('subject_id3')
                ->references('id')
                ->on('subjects')
                ->onDelete('set null');

            $table->foreign('squad_id')
                ->references('id')
                ->on('squads')
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
        Schema::dropIfExists('failers');
    }
}
