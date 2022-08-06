<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

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

Route::get('/', function () {
    return view('page.home');
});
Route::get('/home', function () {
    return view('page.home');
});
Route::get('/about', function () {
    return view('page.about');
});
Route::get('/history', function () {
    return view('page.history');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/all', function () {
    return view('category.all');
});
Route::get('/carpentry', function () {
    return view('category.carpentry');
});
Route::get('/cleaning', function () {
    return view('category.cleaning');
});
Route::get('/electrical', function () {
    return view('category.electrical');
});
Route::get('/flooring', function () {
    return view('category.flooring');
});
Route::get('/painting', function () {
    return view('category.painting');
});
Route::get('/plumbing', function () {
    return view('category.plumbing');
});
Route::get('/admin', [adminController::class, 'index'])->middleware(['auth'])->name('admin');


 
Route::get('/electrical', [ServiceController::class, 'electrical']);
Route::get('/plumbing', [ServiceController::class, 'plumbing']);
Route::get('/cleaning', [ServiceController::class, 'cleaning']);
Route::get('/painting', [ServiceController::class, 'painting']);
Route::get('/flooring', [ServiceController::class, 'flooring']);
Route::get('/carpentry', [ServiceController::class, 'carpentry']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/checkout/{id}',[ServiceController::class,'checkout'], function () {
    return view('page.checkout');
})->middleware(['auth'])->name('checkout');

require __DIR__.'/auth.php';
