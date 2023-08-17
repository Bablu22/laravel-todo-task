<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoStatusController;
use App\Http\Resources\TodoResource;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('welcome');

Route::get('/dashboard', function () {

    $todos = TodoResource::collection(auth()->user()->todos()->latest()->get());
    return Inertia::render('Dashboard', [
        'todos' => $todos,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('todos', TodoController::class);
    Route::patch('/todos/{todo}/status', [TodoStatusController::class, 'statusChange'])->name('todos.status');

});

require __DIR__ . '/auth.php';
