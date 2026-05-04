<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'document-management/masters/document/'], function () {
                Route::get('list', [DocumentMasterController::class, 'index']);
                Route::post('list', [DocumentMasterController::class, 'index']);
                Route::get('add', [DocumentMasterController::class, 'add']);
                Route::POST('add/submit',  [DocumentMasterController::class, 'store']);
                Route::post('status', [DocumentMasterController::class, 'statusChange']);
                Route::get('edit/{id}', [DocumentMasterController::class, 'edit']);
                Route::post('edit/submit', [DocumentMasterController::class, 'Update']);
                Route::get('view/{id}', [DocumentMasterController::class, 'view']);
                Route::post('delete',  [DocumentMasterController::class, 'delete']);
                Route::get('export/excel', [DocumentMasterController::class, 'exportExcel']);
                Route::get('export/pdf', [DocumentMasterController::class, 'exportPdf']);
                Route::get('import', [DocumentMasterController::class, 'import']);
                Route::post('import/submit', [DocumentMasterController::class, 'importSubmit']);
                Route::post('unique', [DocumentMasterController::class, 'Uniquecheck']);
                Route::get('sampledownload', [DocumentMasterController::class, 'DownloadSample']);
                // Route::get('download-file/{filename}', [DocumentMasterController::class, 'DownloadFile'])->name('download.locationFile')->middleware('signed');
                Route::get('employee-list', [DocumentMasterController::class, 'employeeList']);
                Route::get('list/{companyId}', [DocumentMasterController::class, 'list']);
                Route::post('getlocation', [DocumentMasterController::class, 'getLocation']);
                Route::get('getAreaOwner/{id}', [DocumentMasterController::class, 'getAreaOwner']);
            });
