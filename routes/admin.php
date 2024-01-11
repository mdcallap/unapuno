<?php

use App\Livewire\Admin\Category;
use App\Livewire\Admin\Family;
use App\Livewire\Admin\Subcategory;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/areas', Family::class)->name('admin.families');
    Route::get('/subareas', Category::class)->name('admin.categories');
    Route::get('/items', Subcategory::class)->name('admin.subcategories');

});
