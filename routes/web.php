<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FormtryController;
use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ShowController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something gre  at!
|
*/

Route::get('#', function () {
    return view('welcome');
});

/*
Route::get('form', function () {
    return view('students/form');
});

Route::resource('registration','App\http\Http\Controllers\RegistrationController');

Route::get('bro', function () {
    return view('students/index');
});


Route::get('formtry', function () {
    return view('students/formtry');
});




Route::resource('registration','app\Http\Controllers\RegistrationController');
// formtry

Route::post('/form_try',[FormtryController::class, 'InsertDataFrom']);
*/

//student form

Route::get('form',[StudentController::class, 'home'] );
Route::post('/form_action',[StudentController::class, 'InsertData']);

Route::get('login', function () {
    return view('students/login');
});

Route::post('/login',[LoginPageController::class, 'loginData']);

//teacher
Route::get('Teacher', function () {
    return view('students/Teacher');
});
Route::post('/njoo',[TeacherController::class, 'Data']);


//update
Route::post('/update',[StudentController::class, 'Update']);
Route::post('/delete',[StudentController::class, 'Delete']);
Route::post('/result',[StudentController::class, 'result']);

Route::get('Reuslt', function () {
    return view('students/result');
});


Route::post('/result',[StudentController::class, 'result']);

Route::get('Reuslt', function () {
    return view('students/result');
});

Route::get('admin', function () {
    return view('views.admin');
});



//new activities
Route::get('/', function () {
    return view('home');
});


Route::get('Report',[ShowController::class, 'show']);