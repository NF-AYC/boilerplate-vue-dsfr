<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// Login route is now handled by API Platform

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::post('/auth/login', [AuthController::class, 'process'])->name('api.auth.login');
// Route::post('/auth/login', function(Request $request) {
//     return response()->json(['message' => 'Login endpoint']);
// }
// )->name('api.auth.login');


Route::get('/debug-auth', function (Request $request) {
    return response()->json([
        'authenticated' => auth()->check(),
        'user' => auth()->user(),
        'session_id' => session()->getId(),
        'csrf_token' => csrf_token(),
        'guard' => config('sanctum.guard'),
        'stateful_domains' => config('sanctum.stateful'),
        'current_domain' => $request->getHost(),
        'cookies' => $request->cookies->all(),
    ]);
});