<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrivilegeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\VerifyAdminPrivilege;
use App\Http\Middleware\VerifyRootPrivilege;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/privileges', [PrivilegeController::class, 'index'])->name('privileges.index');
    Route::post('/privileges/update', [PrivilegeController::class, 'update'])->name('privileges.update');
    Route::post('/privileges/destroy', [PrivilegeController::class, 'destroy'])->name('privileges.destroy');
});


//Route::get('/privileges', [PrivilegeController::class, 'index'])
      //  ->middleware(['auth', 'verified', VerifyRootPrivilege::class])->name('privileges');



Route::get('/fairytales_manager', function () {
    return view('fairytales_manager');
})->middleware(['auth', 'verified', VerifyAdminPrivilege::class])->name('fairytales_manager');

Route::get('/authors_manager', function () {
    return view('authors_manager');
})->middleware(['auth', 'verified', VerifyAdminPrivilege::class])->name('authors_manager');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
