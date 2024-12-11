<?php

use App\Http\Controllers\Admin\AdminDashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('services',function () {
    return view('services');
});

Route::get('/galeri',function () {
    return view('galeri');
});

Route::get('/about',function () {
    return view('about');
});

Route::get('/Carrer',function () {
    return view('Carrer');
});

Route::get('/Contact',function () {
    return view('Contact');
});

Route::get('/Clients',function () {
    return view('Clients');
});

Route::get('/Test',function () {
    return view('test');
});

Route::post('/services', [ServiceController::class, 'store']);

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
