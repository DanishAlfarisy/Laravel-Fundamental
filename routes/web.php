<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HobbyController;

Route::get('/', function () {
    return redirect()->route('profiles.index');
});

Route::resource('profiles', ProfileController::class);

Route::get('/hobbies', [HobbyController::class, 'index'])
    ->name('hobbies.index');

Route::get('/hobbies/create', [HobbyController::class, 'create'])
    ->name('hobbies.create');    

Route::post('/hobbies', [HobbyController::class, 'store'])
    ->name('hobbies.store');

Route::delete('/hobbies/{hobby}', [HobbyController::class, 'destroy'])
    ->name('hobbies.destroy');
