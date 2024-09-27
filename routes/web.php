<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\RegisterationController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/sign-up", [RegisterationController::class, "index"]);
Route::post("/sign-up", [RegisterationController::class, "store"]);

Route::get("/log-in", [LogInController::class, "index"]);
Route::post("/log-in", [LogInController::class, "check"]);

// dashboard

Route::get("/index", [EmployeeController::class, "index"]);
Route::get("/archive", [EmployeeController::class, "archive"]);
Route::get("/restore/{id}", [EmployeeController::class, "restore"]);
Route::get("/edit/{id}", [EmployeeController::class, "edit"]);


Route::post("/store", [EmployeeController::class, "store"]);
Route::delete("/delete/{id}", [EmployeeController::class, "destroy"]);
Route::delete("/forceDelete/{id}", [EmployeeController::class, "forceDelete"]);

Route::put("/edited/{id}", [EmployeeController::class, "update"]);
