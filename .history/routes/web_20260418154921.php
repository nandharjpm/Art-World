<?php

use App\Http\Controllers\admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin/'], function () {
    dd($req)
    Route::get('login', [LoginController::class, 'showLogin'])->name('admin.login');
});
