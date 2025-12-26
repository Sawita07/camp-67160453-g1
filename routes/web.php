<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopFormController;
Route::get('/', function () {
    return view('html101');
});

Route::get('/se',function(){
    return view('template.default');
});

//Route::get('/mycontroller',[App\Http\Controllers\MyController::class,'index']);
//Route::get('/calculate',[App\Http\Controllers\MyController::class , 'inFo']);
//Route::get('/calculate',[App\Http\Controllers\MyController::class , 'calculate']);

Route::get('/', [App\Http\Controllers\WorkshopFormController::class, 'index']);
Route::post('/workshop', [App\Http\Controllers\WorkshopFormController::class, 'store'])
        ->name('workshop.store');


