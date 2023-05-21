<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\ChallengersHasChallengeController;
use App\Models\Challenge;
use Illuminate\Support\Facades\Route;

//example-app.test
//example-app.test/contact => contact
//example-app.test/blog => blog
//example-app.test/about => about

 Route::view('/','inicio')->name('inicio');
 Route::view('/contacto','contacto')->name('contacto');

// Route::get('/challenges', [ChallengeController::class, 'index'])->name('challenges.index');
// Route::get('/challenges/create', [ChallengeController::class, 'create'])->name('challenge.create');
// Route::post('/challenges', [ChallengeController::class, 'store'])->name('challenges.store');
// Route::get('/challenge/{numero}', [ChallengeController::class, 'show'])->name('challenge.show');
// Route::patch('/challenge/{numero}', [ChallengeController::class, 'update'])->name('challenge.update');
// Route::get('/challenge/{numero}/edit', [ChallengeController::class, 'edit'])->name('challenge.edit');
// Route::delete('challenge/{numero}', [ChallengeController::class, 'destroy' ])->name('challenge.destroy');

//Ruta que agrupa en un controlador el CRUD de los retos.
Route::resource('challenges', ChallengeController::class, [
    'parameters' => ['challenges'=>'challenge']
]);

Route::view('/conocenos','conocenos')->name('conocenos');

Route::view('/registro','auth.registro')->name('registro');
Route::post('/registro', [RegisteredUserController::class, 'store']);
Route::post('/logout-user', [AuthenticatedSessionController::class, 'destroy'])->name('logout-user');


Route::view('/login-user','auth.login-user')->name('login-user');
Route::view('/login-guest','auth.login-guest')->name('login-guest');


 Route::post('/login-user', [AuthenticatedSessionController::class, 'store']);



// Rutas sobre los registros
Route::view('/registros','registers.index')->name('registros');

//Auth::routes();

// Rutas para crear nuevos registros

Route::get('new-register/{challenge}', [ChallengersHasChallengeController::class, 'create'])->name('new.register');

//Route::resource('register', ChallengersHasChallengeController::class, ['parameters' => ['challenges'=>'challenge'] ]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;


Route::get('/login', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
});
