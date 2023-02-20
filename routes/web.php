<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\homepageController;
use App\Http\Controllers\front\CourseController;
use App\Http\Controllers\front\MessageController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CatController;
use App\Http\Controllers\admin\TrainerController;
use App\Http\Controllers\admin\CoursesController;
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
// Route::namespace()
Route::get("/",[homepageController::class,"index"])->name("front.homepage");
Route::get("/cat/{id}",[CourseController::class,"cat"])->name("front.cat");
Route::get("/cat/{id}/course/{cId}",[CourseController::class,"show"])->name("front.show");

Route::post("/message/newsletter", [MessageController::class, "newsletter"])->name("front.message.newsletter");
Route::post("/message/enroll", [MessageController::class, "enroll"])->name("front.message.enroll");

Route::get("/dashboard/login", [AuthController::class, "login"])->name("admin.login");
Route::post("/dashboard/dologin", [AuthController::class, "dologin"])->name("admin.dologin");

// Route::middleware("admin:admin")->group(function(){
    Route::post("/dashboard/login_out", [AuthController::class, "login_out"])->name("admin.login_out");
    Route::get("/dashboard", [HomeController::class, "index"])->name("admin.home");
    Route::get("/dashboard/cats", [CatController::class, "index"])->name("admin.cats.index");
    Route::get("/dashboard/cats/create", [CatController::class, "create"])->name("admin.cats.create");
    Route::post("/dashboard/cats/update", [CatController::class, "update"])->name("admin.cats.update");
    Route::get("/dashboard/cats/edit/{id}", [CatController::class, "edit"])->name("admin.cats.edit");
    Route::post("/dashboard/cats/store", [CatController::class, "store"])->name("admin.cats.store");
    Route::get("/dashboard/cats/delete/{id}", [CatController::class, "delete"])->name("admin.cats.delete");

    Route::get("/dashboard/trainer", [TrainerController::class, "index"])->name("admin.trainer.index");
    Route::get("/dashboard/trainer/create", [TrainerController::class, "create"])->name("admin.trainer.create");
    Route::post("/dashboard/trainer/update", [TrainerController::class, "update"])->name("admin.trainer.update");
    Route::get("/dashboard/trainer/edit/{id}", [TrainerController::class, "edit"])->name("admin.trainer.edit");
    Route::post("/dashboard/trainer/store", [TrainerController::class, "store"])->name("admin.trainer.store");
    Route::get("/dashboard/trainer/delete/{id}", [TrainerController::class, "delete"])->name("admin.trainer.delete");

    Route::get("/dashboard/course", [CoursesController::class, "index"])->name("admin.course.index");
    Route::get("/dashboard/course/create", [CoursesController::class, "create"])->name("admin.course.create");
    Route::post("/dashboard/course/update", [CoursesController::class, "update"])->name("admin.course.update");
    Route::get("/dashboard/course/edit/{id}", [CoursesController::class, "edit"])->name("admin.course.edit");
    Route::post("/dashboard/course/store", [CoursesController::class, "store"])->name("admin.course.store");
    Route::get("/dashboard/course/delete/{id}", [CoursesController::class, "delete"])->name("admin.course.delete");





// });


