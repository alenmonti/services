<?php

use Illuminate\Support\Facades\Route;
use App\Models\Professional;

Route::view('/', 'welcome')->name('home');

Route::get('/magali-monti', function () {
	$professional = Professional::where('slug', 'magali-monti')->first();

	// if seeder not run or professional missing, return simple view with empty services
	if (! $professional) {
		$services = collect();
		return view('magali-monti', compact('professional', 'services'));
	}

	$services = $professional->services()->where('visible', true)->get();
	return view('magali-monti', compact('professional', 'services'));
});

Route::get('/mailin-monti', function () {
	$professional = Professional::where('slug', 'mailin-monti')->first();

	if (! $professional) {
		$services = collect();
		return view('mailin-monti', compact('professional', 'services'));
	}

	$services = $professional->services()->where('visible', true)->get();

	return view('mailin-monti', compact('professional', 'services'));
});

Route::get('/debug-session', function () {
    return [
        'auth' => auth()->check(),
        'user' => auth()->user()?->email,
        'session_id' => session()->getId(),
        'secure' => request()->isSecure(),
        'cookies' => request()->cookies->all(),
    ];
});

Route::get('/test-auth', function () {
    return [
        'auth' => auth()->check(),
        'user' => auth()->user(),
        'session' => session()->all(),
    ];
})->middleware('web');
