<?php

use App\Http\Controllers\ProfessionalController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/magali-monti', [ProfessionalController::class, 'showMagaliMonti']);
Route::get('/mailin-monti', [ProfessionalController::class, 'showMailinMonti']);
