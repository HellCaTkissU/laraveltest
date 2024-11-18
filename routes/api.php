<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\My2ndTestController;
use App\Http\Controllers\UniverController;
use App\Http\Controllers\Controller;


class UniverController1 extends \App\Http\Controllers\Controller
{

}

Route::get('/db', [UserController::class, 'index']);
Route::get('/db2', [My2ndTestController::class, 'index']);
Route::get('/students', [UniverController::class, 'list_s']);
Route::get('/teachers', [UniverController::class, 'list_t']);
Route::get('/subjects', [UniverController::class, 'list_sub']);
Route::get('/groups', [UniverController::class, 'list_g']);
Route::get('/std', [UniverController::class, 'teststd']);



Route::get('/student/',[UniverController::class, 'list_s_id']);




?>
