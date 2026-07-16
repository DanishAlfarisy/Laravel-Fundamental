<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HobbyController;

Route::get('/', function () {
    return redirect()->route('profiles.index');
});

Route::resource('profiles', ProfileController::class);

Route::resource('companies', CompanyController::class);

Route::get('/hobbies', [HobbyController::class, 'index'])
    ->name('hobbies.index');

Route::get('/hobbies/create', [HobbyController::class, 'create'])
    ->name('hobbies.create'); 

Route::post('/hobbies', [HobbyController::class, 'store'])
    ->name('hobbies.store');

Route::get('/hobbies/edit/{hobby}', [HobbyController::class, 'edit'])
    ->name('hobbies.edit');

Route::put('/hobbies/{hobby}', [HobbyController::class, 'update'])
    ->name('hobbies.update');

Route::delete('/hobbies/{hobby}', [HobbyController::class, 'destroy'])
    ->name('hobbies.destroy');
