<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\homepageController;
use App\Http\Controllers\front\CourseController;
use App\Http\Controllers\front\MessageController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CatController;

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
    Route::get("/cats", [CatController::class, "index"])->name("admin.cats.index");
    Route::get("/cats/create", [CatController::class, "create"])->name("admin.cats.create");
    Route::post("/cats/update", [CatController::class, "update"])->name("admin.cats.update");
    Route::get("/cats/edit/{id}", [CatController::class, "edit"])->name("admin.cats.edit");
    Route::post("/cats/store", [CatController::class, "store"])->name("admin.cats.store");
    Route::get("/cats/delete/{id}", [CatController::class, "delete"])->name("admin.cats.delete");
// });


