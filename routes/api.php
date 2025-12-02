<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeadController;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Support\Facades\Route;

//
Route::group([
    'middleware' => ['api', HandleCors::class],
    'prefix' => '/crm/v1',
], function () {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:10,1')->name('login');
    Route::middleware('auth:api')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::post('/refresh', [AuthController::class, 'refresh'])->name('refresh');
        Route::post('/me', [AuthController::class, 'me'])->name('me');
    });
    Route::get('/health', function () {
        return ['status' => 'ok'];
    });
    Route::post('/leads', [LeadController::class, 'addLead'])->name('addLead');
    Route::get('/leads', [LeadController::class, 'getLeads'])->name('getLeads');
});
