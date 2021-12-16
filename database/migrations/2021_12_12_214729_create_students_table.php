<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('second_name');
            $table->string('third_name');
            $table->string('last_name');
            $table->string('mother_name');
            $table->boolean('gender');
            $table->date('birth_date');
            $table->date('study_year');
            $table->date('coming_date');
            $table->string('home_phone');
            $table->string('identity_card');
            $table->text('image');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->unsignedBigInteger('nationality_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('center_id')->nullable();
            $table->unsignedBigInteger('qualification_id')->nullable();
            $table->unsignedBigInteger('army_id')->nullable();
            $table->unsignedBigInteger('squad_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('coming_from')->nullable();
            $table->unsignedBigInteger('going_to')->nullable();
            $table->unsignedBigInteger('payment_state_id')->nullable();
            $table->timestamps();

            $table->foreign('status_id')
            ->references('id')
            ->on('statuses')
            ->onDelete('set null');

            $table->foreign('nationality_id')
            ->references('id')
            ->on('nationalities')
            ->onDelete('set null');

            $table->foreign('city_id')
            ->references('id')
            ->on('cities')
            ->onDelete('set null');

            $table->foreign('center_id')
            ->references('id')
            ->on('centers')
            ->onDelete('set null');

            $table->foreign('qualification_id')
            ->references('id')
            ->on('qualifications')
            ->onDelete('set null');

            $table->foreign('army_id')
            ->references('id')
            ->on('armies')
            ->onDelete('set null');


            $table->foreign('squad_id')
            ->references('id')
            ->on('squads')
            ->onDelete('set null');

            $table->foreign('department_id')
            ->references('id')
            ->on('departments')
            ->onDelete('set null');

            $table->foreign('coming_from')
            ->references('id')
            ->on('organizations')
            ->onDelete('set null');

            $table->foreign('going_to')
            ->references('id')
            ->on('organizations')
            ->onDelete('set null');

            $table->foreign('payment_state_id')
            ->references('id')
            ->on('payment_states')
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
        Schema::dropIfExists('students');
    }
}
