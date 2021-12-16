<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_finances', function (Blueprint $table) {
            $table->id();
            $table->float('paid');
            $table->float('rest_money');
            $table->float('money_from_prev_years');
            $table->unsignedBigInteger('finance_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->date('paid_date');
            $table->string('paid_id_number');
            $table->timestamps();

            $table->foreign('finance_id')
            ->references('id')
            ->on('finances')
            ->onDelete('set null');

            $table->foreign('student_id')
            ->references('id')
            ->on('students')
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
        Schema::dropIfExists('student_finances');
    }
}
