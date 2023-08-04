<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\EmployeeController; //ini juga coba2
use App\Http\Controllers\Auth\LoginController;



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

//welcome page
Route::get('/', function () {
    
    if (Auth::check()) {
    return Redirect::to('home');
    }
    else{
        return view('welcome');
    }
});

//ini buat message???
Route::get('/news', function () {
    return view('news');
});

//??
Route::get('/contact', function () {
    return view('contact');
});


Route::get('pesanan/create', [App\Http\Controllers\PesananController::class, 'create'])->name('pesanan.create');
Route::get('editpesanan/{id}', [App\Http\Controllers\PesananController::class, 'edit'])->name('pesanan.edit');
Route::delete('hapuspesanan/{id}', [App\Http\Controllers\PesananController::class, 'destroy'])->name('pesanan.destroy');
Route::put('updatepesanan/{id}', [App\Http\Controllers\PesananController::class, 'update'])->name('pesanan.update');
Route::post('pesanan', [App\Http\Controllers\PesananController::class, 'store'])->name('pesanan.store');


# Route::resource('pesanan', [App\Http\Controllers\PesananController::class, 'adminHome']) ->name(pesanan);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [PesananController::class, 'adminHome'])->name('pesanan.index');;
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });

 Route::get('/riwayat', [PesananController::class, 'histori'])->name('pesanan.histori');
