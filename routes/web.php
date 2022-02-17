<?php

use App\Http\Controllers\ArmyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CommittyController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\DecisionTypeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeePhoneController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamMarkingController;
use App\Http\Controllers\ExamObserverController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\InstallmentController;
use App\Http\Controllers\NationalityController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\NoteTypeController;
use App\Http\Controllers\ObserverController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PaymentStateController;
use App\Http\Controllers\ProfessorAssistantController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ProfessorProfessorAssistantController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\SitnumberController;
use App\Http\Controllers\SquadController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentFinanceController;
use App\Http\Controllers\StudentPhoneController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserPhoneController;
use App\Models\NoteType;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('admin/loginPage',[AuthController::class,'loginPage'])->name('admin.loginPage');
Route::post('admin/login',[AuthController::class , 'login'])->name('admin.login');
Route::get('admin/logout',[AuthController::class , 'logout'])->name('admin.logout');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/', function () {
        return view('pages.home.index');
    })->name('home');
    
    Route::prefix('students')->group(function () {
        Route::resource('army',ArmyController::class);
        Route::resource('center',CenterController::class);
        Route::resource('city',CityController::class);
        Route::resource('decisiontype',DecisionTypeController::class);
        Route::resource('department',DepartmentController::class);
        Route::resource('nationality',NationalityController::class);//
        Route::resource('notetype',NoteTypeController::class);//
        Route::resource('organization',OrganizationController::class);//
        Route::resource('qualification',QualificationController::class);//
        Route::resource('squad',SquadController::class);//
        Route::resource('status',StatusController::class);//
        Route::resource('student',StudentController::class);//
        Route::resource('studentphone',StudentPhoneController::class);//
        Route::resource('note',NoteController::class);//
        Route::resource('decision',DecisionController::class);//
    
        
    });
    
    Route::prefix('employees')->group(function () {
        Route::resource('employee',EmployeeController::class);
        Route::resource('employeephone',EmployeePhoneController::class);//
        Route::resource('observer',ObserverController::class);//
        Route::resource('professor',ProfessorController::class);//  
        Route::resource('professorassistant',ProfessorAssistantController::class);//
        Route::resource('professor_professorassistant',ProfessorProfessorAssistantController::class);//
    
    });
    
    Route::prefix('payments')->group(function () {
        Route::resource('paymentstate',PaymentStateController::class); //
        Route::resource('finance',FinanceController::class); //
        Route::resource('studentfinance',StudentFinanceController::class); //
        Route::resource('installment',InstallmentController::class); //
    });
    
    Route::prefix('exams')->group(function () {
        Route::resource('subject',SubjectController::class);//
        Route::resource('committy',CommittyController::class);//
        Route::resource('exam',ExamController::class);//
        Route::resource('exammarking',ExamMarkingController::class);//
        Route::resource('floor',FloorController::class);//
        Route::resource('examobserver',ExamObserverController::class);//
        Route::resource('sitnumber',SitnumberController::class);//
           
    });
    
    Route::resource('userphone',UserPhoneController::class); //
});

