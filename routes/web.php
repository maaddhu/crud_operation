<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//store
Route::post('/store',[AdminController::class,'store'])->name('store');

//view
Route::get('/view',[AdminController::class,'view'])->name('view');


//edit
Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');

//update
Route::post('/update/{id}',[AdminController::class,'update'])->name('update');

//delete
Route::get('/delete/{id}',[AdminController::class,'destroy'])->name('destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
