<?php

use App\Http\Controllers\ApiRick;
use Illuminate\Support\Facades\Route;

Route::get('/ricks', [ApiRick::class, 'index']);
Route::post('/ricks', [ApiRick::class, 'store']);
Route::get('/ricks/{id}', [ApiRick::class, 'show']);
Route::put('/ricks/{id}', [ApiRick::class, 'update']);
Route::delete('/ricks/{id}', [ApiRick::class, 'destroy']);
