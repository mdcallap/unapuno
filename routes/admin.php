<?php

use App\Livewire\Admin\Category;
use App\Livewire\Admin\ContactAdmin;
use App\Livewire\Admin\Family;
use App\Livewire\Admin\Gallery;
use App\Livewire\Admin\Post;
use App\Livewire\Admin\Slider;
use App\Livewire\Admin\Subcategory;
use App\Livewire\Admin\Tag;
use App\Livewire\Admin\User;
use App\Livewire\Admin\Video;
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
});
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/areas', Family::class)->name('admin.families');
    Route::get('/subareas', Category::class)->name('admin.categories');
    Route::get('/items', Subcategory::class)->name('admin.subcategories');
    Route::get('/publicaciones',Post::class)->name('admin.posts');
    Route::get('/etiquetas', Tag::class)->name('admin.tags');

    Route::get('/slider',Slider::class)->name('admin.sliders');
    Route::get('/videos',Video::class)->name('admin.videos');
    Route::get('/galeria',Gallery::class)->name('admin.gallery');

    Route::get('/contacto',ContactAdmin::class)->name('admin.contact');

    Route::get('/users',User::class)->name('admin.users');




});
