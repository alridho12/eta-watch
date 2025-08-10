<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminKatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KatalogController;

// Route::get('/home', function () {
//     return view('pages.home.index');
// });

Route::resource('/home', HomeController::class);

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
Route::get('/katalog/get', [KatalogController::class, 'getKatalog'])->name('katalog.get');





Route::get('/about-me', function () {
    return view('pages.about-me.index');
});

Route::get('/kontak', function () {
    return view('pages.kontak.index');
});



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');



// Route::get('/dummy', function () {
//     return view('pages.dummy.index');
// });

Route::middleware(['auth'])->group(function () {
    //admin katalog
    Route::get('admin/katalog/serversideTable', [AdminKatalogController::class, 'serversideTable'])->name('admin.katalog.serversideTable');
    Route::get("admin/katalog/detail/{uuid}", [AdminKatalogController::class, 'detail'])->name("admin.katalog.detail");
    Route::resource('admin/katalog', AdminKatalogController::class)->except(['create', 'edit']);

    //admin brand
    Route::get('admin/brand/serversideTable', [BrandController::class, 'serversideTable'])->name('admin.brand.serversideTable');
    Route::get("admin/brand/detail/{uuid}", [BrandController::class, 'detail'])->name("admin.brand.detail");
    Route::resource('admin/brand', BrandController::class)->except(['create', 'edit']);

    //admin sales
    Route::get('admin/katalog-sale/serversideTable', [SaleController::class, 'serversideTable'])->name('admin.sale.serversideTable');
    Route::get("admin/katalog-sale/detail/{uuid}", [SaleController::class, 'detail'])->name("admin.sale.detail");
    Route::resource('admin/katalog-sale', SaleController::class)->except(['create', 'edit']);
});
