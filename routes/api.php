<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;

Route::middleware('auth:sanctum')->prefix('v1')->group(function(){
    Route::apiResource('posts', PostV1::class)->only(['index', 'show', 'destroy']);
});

Route::middleware('auth:sanctum')->prefix('v2')->group(function(){
    Route::apiResource('posts', PostV2::class)->only(['index', 'show']);
});

Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);