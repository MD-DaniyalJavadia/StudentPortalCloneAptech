<?php
use App\http\controllers\pageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('error/404');
});

Route::get("register-page",[pageController::class,'registerPageFun'])->name('register.page');
Route::get("login-page",[pageController::class,"loginPageFun"])->name('login.page');

Route::get("student-portal",[pageController::class,"dashoardPageFun"])->name('dashboardWala.page');
Route::post("dashboard",[pageController::class,"dashoardfun"])->name('dashboard.page');
Route::get("register_complains",[pageController::class,'registercomplainsFun'])->name('register_complains');
Route::get("profile-page",[pageController::class,"profilePage"])->name('profile.page');
Route::get("exam-fetch",[pageController::class,"examfetch"])->name('exam.page');
Route::get("forget-password",[pageController::class,"forgetPassword"]);
Route::get("attendence-page",[pageController::class,"attendencePage"])->name('attendence.page');
Route::get("Annoument",[pageController::class,"AnnoumentPage"])->name("annoument.page");
Route::get("Forget",[pageController::class,"ForgrtPage"])->name("forget.page");
