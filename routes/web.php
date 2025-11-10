<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
});

Route::view('admin-login', 'admin-login');

Route::controller(AdminController::class)->group(function () {
    Route::post('admin-login', 'login');
    Route::get('dashboard', 'dashboard');
    Route::get('admin-categories', 'categories');
    Route::get('admin-logout', 'logout');
    Route::post('add-category', 'addCategory');
    Route::get('category/delete/{id}', 'deleteCategory');
    Route::get('add-quiz', 'addQuiz');
    Route::post('add-mcq', 'addMCQs');
    Route::get('end-quiz', 'endQuiz');
    Route::get('show-quiz', 'showQuiz');
});
