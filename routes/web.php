<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalCameraController as RC;
Route::get('/login',[RC::class,'loginForm']);Route::post('/login',[RC::class,'login']);Route::get('/setup',[RC::class,'setupForm']);Route::post('/setup',[RC::class,'setup']);Route::post('/logout',[RC::class,'logout']);Route::get('/',[RC::class,'index']);Route::get('/edit/{type}/{id}',[RC::class,'editForm'])->whereNumber('id')->name('edit-resource');Route::post('/actions/{action}',[RC::class,'action'])->name('actions');
