<?php

use App\Http\Controllers\FairytaleController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrivilegeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\VerifyAdminPrivilege;
use App\Http\Middleware\VerifyRootPrivilege;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', VerifyRootPrivilege::class])->group(function () {
    Route::get('/privileges', [PrivilegeController::class, 'index'])->name('privileges.index');
    Route::post('/privileges/update', [PrivilegeController::class, 'update'])->name('privileges.update');
    Route::post('/privileges/destroy', [PrivilegeController::class, 'destroy'])->name('privileges.destroy');
});

Route::middleware(['auth', VerifyAdminPrivilege::class])->group(function () {
    Route::get('/authors', [AuthorsController::class, 'index'])->name('authors.index');
    Route::get('/authors/detail', [AuthorsController::class, 'detail'])->name('authors.detail');
    Route::get('/authors/edit', [AuthorsController::class, 'edit'])->name('authors.edit');
    Route::post('/authors/update', [AuthorsController::class, 'update'])->name('authors.update');
    Route::get('/authors/delete', [AuthorsController::class, 'delete'])->name('authors.delete');
    Route::get('/authors/creator', [AuthorsController::class, 'open_creator'])->name('authors.creator');
    Route::post('/authors/create', [AuthorsController::class, 'create'])->name('authors.create');
});

//Route::get('/privileges', [PrivilegeController::class, 'index'])
      //  ->middleware(['auth', 'verified', VerifyRootPrivilege::class])->name('privileges');




Route::middleware(['auth', VerifyAdminPrivilege::class])->group(function () {
    Route::get('/fairytale', [FairytaleController::class, 'index'])->name('fairytale.index');
    Route::get('/fairytale/detail', [FairytaleController::class, 'detail'])->name('fairytale.detail');
    Route::get('/fairytale/edit', [FairytaleController::class, 'edit'])->name('fairytale.edit');
    Route::post('/fairytale/update', [FairytaleController::class, 'update'])->name('fairytale.update');
    Route::get('/fairytale/delete', [FairytaleController::class, 'delete'])->name('fairytale.delete');
    Route::get('/fairytale/creator', [FairytaleController::class, 'open_creator'])->name('fairytale.creator');
    Route::post('/fairytale/create', [FairytaleController::class, 'create'])->name('fairytale.create');
});

Route::get('/authors_manager', function () {
    return view('authors_manager');
})->middleware(['auth', 'verified', VerifyAdminPrivilege::class])->name('authors_manager');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
