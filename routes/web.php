<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessionalController;

Route::view('/', 'welcome')->name('home');

Route::get('/magali-monti', [ProfessionalController::class, 'showMagaliMonti']);
Route::get('/mailin-monti', [ProfessionalController::class, 'showMailinMonti']);