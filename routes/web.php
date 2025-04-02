<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get(
    '/',
    [MainController::class, 'home']
)->name('home');

Route::get(
    '/courses',
    [MainController::class, 'courses']
)->name('courses');

Route::get(
    '/departments',
    [MainController::class, 'departments']
)->name('departments');

Route::get(
    '/contact',
    [MainController::class, 'contact']
)->name('contact');