<?php

use App\Livewire\Web\Contact;
use App\Livewire\Web\Documents;
use App\Livewire\Web\Feature;
use App\Livewire\Web\Home;
use App\Livewire\Web\Posts;
use App\Livewire\Web\ShowDocument;
use App\Livewire\Web\ShowGaleries;
use App\Livewire\Web\ShowItem;
use App\Livewire\Web\ShowPost;
use App\Livewire\Web\ShowVideos;
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

Route::get('/', Home::class)->name('web.home');
Route::get('/post/{id}', ShowPost::class)->name('web.show.post');

Route::get('/documento/{id}', ShowDocument::class)->name('web.show.document');

Route::get('/item/{id}', ShowItem::class)->name('web.show.item');

Route::get('/documentos', Documents::class)->name('web.documents');

Route::get('/publicacionesall', Posts::class)->name('web.posts');


Route::get('/showvideos', ShowVideos::class)->name('web.video');

Route::get('/showgaleries', ShowGaleries::class)->name('web.gallery');

Route::get('/nosotros',Feature::class)->name('web.feature');

Route::get('/contactos',Contact::class)->name('web.contact');




/* Route::get('/', Home::class)->name('web.home'); */


