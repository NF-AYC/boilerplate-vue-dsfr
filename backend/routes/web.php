<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    return view('welcome');
});


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
});//->middleware('web');

Route::get('/debug-sanctum', function (Request $request) {
    return response()->json([
        'sanctum_guard' => auth('sanctum')->check(),
        'web_guard' => auth('web')->check(),
        'sanctum_user' => auth('sanctum')->user(),
        'web_user' => auth('web')->user(),
        'request_is_from_stateful_domain' => app(\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class),
    ]);
})->middleware(['web', 'auth:sanctum']);