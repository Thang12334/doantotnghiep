<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

## /routes/web.php
Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');

Auth::routes([
    'register' => true,
    'reset' => false,
    'verify' => false,
]);

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('logout', function(){
        \Auth::logout();
        return redirect()->route('login');
    })->name('logoutz');
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/roommap', [App\Http\Controllers\HomeController::class, 'roommap'])->name('map');

    Route::group(['prefix' => 'roomtype'], function(){
        Route::get('/', [App\Http\Controllers\RoomTypeController::class, 'index'])->name('roomtype.index');
        Route::get('/add', [App\Http\Controllers\RoomTypeController::class, 'add'])->name('roomtype.add');
        Route::post('/store', [App\Http\Controllers\RoomTypeController::class, 'store'])->name('roomtype.store');
        Route::get('/edit/{id}', [App\Http\Controllers\RoomTypeController::class, 'edit'])->name('roomtype.edit');
        Route::put('/update/{id}', [App\Http\Controllers\RoomTypeController::class, 'update'])->name('roomtype.update');
        Route::get('/destroy/{id}', [App\Http\Controllers\RoomTypeController::class, 'destroy'])->name('roomtype.destroy');
    });
    Route::group(['prefix' => 'room'], function(){
        Route::get('/', [App\Http\Controllers\RoomController::class, 'index'])->name('room.index');
        Route::get('/add', [App\Http\Controllers\RoomController::class, 'add'])->name('room.add');
        Route::post('/store', [App\Http\Controllers\RoomController::class, 'store'])->name('room.store');
        Route::get('/edit/{id}', [App\Http\Controllers\RoomController::class, 'edit'])->name('room.edit');
        Route::put('/update/{id}', [App\Http\Controllers\RoomController::class, 'update'])->name('room.update');
        Route::get('/destroy/{id}', [App\Http\Controllers\RoomController::class, 'destroy'])->name('room.destroy');
    });
    Route::group(['prefix' => 'device'], function(){
        Route::get('/', [App\Http\Controllers\DeviceController::class, 'index'])->name('device.index');
        Route::get('/add', [App\Http\Controllers\DeviceController::class, 'add'])->name('device.add');
        Route::post('/store', [App\Http\Controllers\DeviceController::class, 'store'])->name('device.store');
        Route::get('/edit/{id}', [App\Http\Controllers\DeviceController::class, 'edit'])->name('device.edit');
        Route::put('/update/{id}', [App\Http\Controllers\DeviceController::class, 'update'])->name('device.update');
        Route::get('/destroy/{id}', [App\Http\Controllers\DeviceController::class, 'destroy'])->name('device.destroy');
    });
    Route::group(['prefix' => 'service'], function(){
        Route::get('/', [App\Http\Controllers\ServiceController::class, 'index'])->name('service.index');
        Route::get('/add', [App\Http\Controllers\ServiceController::class, 'add'])->name('service.add');
        Route::post('/store', [App\Http\Controllers\ServiceController::class, 'store'])->name('service.store');
        Route::get('/edit/{id}', [App\Http\Controllers\ServiceController::class, 'edit'])->name('service.edit');
        Route::put('/update/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('service.update');
        Route::get('/destroy/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('service.destroy');
    });
    Route::group(['prefix' => 'bill'], function(){
        Route::get('/', [App\Http\Controllers\BillzController::class, 'index'])->name('bill.index');
        Route::get('/add', [App\Http\Controllers\BillzController::class, 'add'])->name('bill.add');
        Route::post('/add_detail', [App\Http\Controllers\BillzController::class, 'add_detail'])->name('bill.add_detail');
        Route::post('/store', [App\Http\Controllers\BillzController::class, 'store'])->name('bill.store');
        Route::get('/edit/{id}', [App\Http\Controllers\BillzController::class, 'edit'])->name('bill.edit');
        Route::put('/update/{id}', [App\Http\Controllers\BillzController::class, 'update'])->name('bill.update');
        Route::get('/destroy/{id}', [App\Http\Controllers\BillzController::class, 'destroy'])->name('bill.destroy');
    });
    Route::group(['prefix' => 'slide'], function(){
        Route::get('/', [App\Http\Controllers\SlideController::class, 'index'])->name('slide.index');
        Route::get('/add', [App\Http\Controllers\SlideController::class, 'add'])->name('slide.add');
        Route::post('/add_detail', [App\Http\Controllers\SlideController::class, 'add_detail'])->name('slide.add_detail');
        Route::post('/store', [App\Http\Controllers\SlideController::class, 'store'])->name('slide.store');
        Route::get('/edit/{id}', [App\Http\Controllers\SlideController::class, 'edit'])->name('slide.edit');
        Route::put('/update/{id}', [App\Http\Controllers\SlideController::class, 'update'])->name('slide.update');
        Route::get('/destroy/{id}', [App\Http\Controllers\SlideController::class, 'destroy'])->name('slide.destroy');
    });
});

