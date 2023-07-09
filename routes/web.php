<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ParcelleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;


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

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/users.index', function () {
    return view('users.index');
})->middleware(['auth', 'verified'])->name('users.index');

Route::get('/create', [UserController::class, 'create'])->name('parcelles.create');
Route::get('/pagination', [UserController::class, 'create'])->name('pagination');
Route::get('/users.index', [UserController::class, 'index'])->name('users.index');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/formulaire', [ParcelleController::class, 'create'])->name('formulaire.create');
Route::post('/formulaire', [ParcelleController::class, 'store'])->name('formulaire.store');
Route::get('/parcelle', [ParcelleController::class, 'index'])->name('parcelle');
Route::delete('/parcelle/{id}', [ParcelleController::class, 'destroy'])->name('parcelle.destroy');
Route::get('/parcelles/{id}/edit', [ParcelleController::class, 'edit'])->name('parcelles.edit');
Route::post('/parcelles/{id}', [ParcelleController::class, 'update'])->name('parcelles.update');
Route::put('/parcelles/{id}', [ParcelleController::class, 'update'])->name('parcelles.update');
Route::get('/add', [UserController::class, 'add'])->name('add');
Route::post('/ajouter', [UserController::class, 'ajouter'])->name('ajouter');
Route::post('/parcelle', [ParcelleController::class, 'index'])->name('parcelle');
Route::post('/login2', [adminController::class, 'validateLogin'])->name('login2');
Route::get('/login2', [adminController::class, 'validateLogin'])->name('login2');









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
