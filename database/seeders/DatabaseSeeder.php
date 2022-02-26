<?php

namespace Database\Seeders;

use App\Models\Army;
use App\Models\Center;
use App\Models\City;
use App\Models\Committy;
use App\Models\Decision;
use App\Models\DecisionType;
use App\Models\Department;
use App\Models\Employee;
use App\Models\EmployeePhone;
use App\Models\Exam;
use App\Models\ExamMarking;
use App\Models\ExamObserver;
use App\Models\Failer;
use App\Models\Finance;
use App\Models\Floor;
use App\Models\Installment;
use App\Models\Nationality;
use App\Models\Note;
use App\Models\NoteType;
use App\Models\Observer;
use App\Models\Organization;
use App\Models\PaymentState;
use App\Models\Professor;
use App\Models\professor_professorAssistant;
use App\Models\ProfessorAssistant;
use App\Models\Qualification;
use App\Models\Sitnumber;
use App\Models\Squad;
use App\Models\Status;
use App\Models\Student;
use App\Models\StudentFinance;
use App\Models\StudentPhone;
use App\Models\Subject;
use App\Models\User;
use App\Models\UserPhone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Army::factory(10)->create();
        Center::factory(10)->create();
        City::factory(10)->create();
        DecisionType::factory(10)->create();
        Department::factory(10)->create();
        Employee::factory(10)->create();
        EmployeePhone::factory(10)->create();
        Floor::factory(10)->create();
        Nationality::factory(10)->create();
        NoteType::factory(10)->create();
        Observer::factory(10)->create();
        Organization::factory(10)->create();
        PaymentState::factory(10)->create();
        Professor::factory(10)->create();
        ProfessorAssistant::factory(10)->create();
        Qualification::factory(10)->create();
        Squad::factory(10)->create();
        Status::factory(10)->create();
        Subject::factory(10)->create();
        UserPhone::factory(10)->create();
        Committy::factory(10)->create();
        Exam::factory(10)->create();
        ExamObserver::factory(10)->create();
        Finance::factory(10)->create();
        professor_professorAssistant::factory(10)->create();
        Student::factory(10)->create();
        ExamMarking::factory(10)->create();
        StudentFinance::factory(10)->create();
        StudentPhone::factory(10)->create();
        Sitnumber::factory(10)->create();
        Note::factory(10)->create();
        Installment::factory(10)->create();
        Decision::factory(10)->create();
        Failer::factory(10)->create();
        User::create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456')
        ]);
    }
}
