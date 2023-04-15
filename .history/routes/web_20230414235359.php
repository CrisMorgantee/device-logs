<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DeviceLogsController;
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
    return view('auth.login');
});

Route::post('/dashboard-search', [DeviceLogsController::class, 'search'])->middleware(['auth', 'verified'])->name('dashboard.search');
Route::resource('/dashboard', DeviceLogsController::class)->middleware(['auth', 'verified'])->names('dashboard')->parameters('dashboard' => 'dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
