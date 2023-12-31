<?php

use App\Http\Controllers\Auth\ContentController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\Auth\StaffController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
// });

Route::middleware(['web', 'TrackVisitor'])->group(function () {
    Route::post('/', [PartnerController::class, 'store'])->name('Partner.store');
    Route::get('/', [WebsiteController::class, 'index'])->name('home');
    Route::get('/ESB', [WebsiteController::class, 'ESB'])->name('ESB');
    Route::get('/BI', [WebsiteController::class, 'BI'])->name('BI');
    Route::get('/resource', [WebsiteController::class, 'RE']);
    Route::get('/posts/{post}', [WebsiteController::class, 'show'])->name('post.show');
    Route::get('/resource/articles', [WebsiteController::class, 'articles']);
    Route::get('/resource/articles/search', [WebsiteController::class, 'searchArticles'])->name('articles.search');
    Route::get('/resource/whitepapers', [WebsiteController::class, 'whitepapers']);
}); // Ini adalah route yang ingin di hitung pada dashboard CMS

Auth::routes();
Route::get('/cms/dashboard', [WebsiteController::class, 'dashboard'])->name('dashboard')->middleware('auth'); //middleware auth berfungsi agar halaman hanya bisa di akses saat sudah login
Route::get('/cms/Partner', [PartnerController::class, 'index'])->name('Partner.index')->middleware('auth');
Route::get('/cms/Partner/del/{id}', [PartnerController::class, 'drop'])->middleware('auth');
//route::resource tidak memerlukan route manual untuk CRUD
Route::resource('/cms/posts', PostController::class)->middleware('auth');

Route::resource('/cms/staffs', StaffController::class)->middleware('auth');
Route::resource('/cms/partners', contentcontroller::class)->middleware('auth');
