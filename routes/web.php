<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/newData',[UserController::class,"viewData"])->name('user.data');
Route::post('/addStudent',[UserController::class,"addStudents"])->name('user.students');
Route::get('/edit_student/{id}',[UserController::class,"editStudent"])->name('user.edit');
Route::post('/update_student/{id}',[UserController::class,"updateStudent"])->name('user.update');





