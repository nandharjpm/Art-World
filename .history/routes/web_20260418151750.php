<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'document-management/masters/document/'], function () {
                Route::get('list', [DocumentMasterController::class, 'index']);
            });
