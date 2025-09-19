<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Plans
    Route::get('/plan', [PlanController::class, 'index'])->name('plan.index');
    Route::get('/plan/create', [PlanController::class, 'create'])->name('plan.create');
    Route::post('/plan/store', [PlanController::class, 'store'])->name('plan.store');
    Route::get('/plan/edit/{id}', [PlanController::class, 'edit'])->name('plan.edit');
    Route::put('/plan/update/{id}', [PlanController::class, 'update'])->name('plan.update');
    Route::delete('/plan/delete/{id}', [PlanController::class, 'destroy'])->name('plan.delete');

    // Subscriptions
    Route::get('/subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
    Route::get('/subscription/create', [SubscriptionController::class, 'create'])->name('subscription.create');
    Route::post('/subscription/store', [SubscriptionController::class, 'store'])->name('subscription.store');
    Route::get('/subscription/edit/{id}', [SubscriptionController::class, 'edit'])->name('subscription.edit');
    Route::put('/subscription/update/{id}', [SubscriptionController::class, 'update'])->name('subscription.update');
    Route::delete('/subscription/delete/{id}', [SubscriptionController::class, 'destroy'])->name('subscription.delete');

});

require __DIR__.'/auth.php';
