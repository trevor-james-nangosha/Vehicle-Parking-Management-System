<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomecontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;


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

Route::get('/', [HomeController::class, "index"])->middleware('auth');

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name("login");
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::get('logout', [LoginController::class, 'logout'])->name('logout'); // should this be a post.

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
// Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
// Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
// Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
// Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
// Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

// the dashboard
// Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth'); // before
Route::get('/dashboard', function () { return view('dashboard'); }); // after

Route::get('/profile', function () { return view('profile'); });
Route::get('/vehicle-category', function () { return view('vehicle-category'); });
Route::get('/manage-vehicles', function () { return view('manage-vehicles'); });
Route::get('/in-vehicles', function () { return view('in-vehicles'); });
Route::get('/out-vehicles', function () { return view('out-vehicles'); });
Route::get('/reports', function () { return view('reports'); });
Route::get('/generate-reports', function () { return view('generate-reports'); });
Route::get('/total-income', function () { return view('total-income'); });
Route::get('/change-password', function () { return view('change-password'); });
Route::get('/forgot-password', function () { return view('forgot-password'); });
Route::get('/settings', function () { return view('settings'); });




Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	// Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
