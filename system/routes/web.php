<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdmin\UserController;
use App\Http\Controllers\Admin\Peraturan\FaqController;
use App\Http\Controllers\Admin\Peraturan\SopController;
use App\Http\Controllers\SuperAdmin\UserSuperController;
use App\Http\Controllers\Admin\Publikasi\IklanController;
use App\Http\Controllers\Admin\Publikasi\VideoController;
use App\Http\Controllers\Admin\Publikasi\BeritaController;

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
    return view('login');
});

Route::get('dashboard-super-admin', [HomeController::class, 'showDashboardSuperAdmin']);
Route::get('dashboard-admin', [HomeController::class, 'showDashboardAdmin']);

// Tampilan Super Admin
Route::prefix('master-data')->group(function(){
    // Super Admin/Admin
    Route::get('usersuper', [UserSuperController::class,'index']);
    Route::get('usersuper/create', [UserSuperController::class,'create']);
    Route::post('usersuper', [UserSuperController::class,'store']);
    Route::get('usersuper/{admin}', [UserSuperController::class,'show']);
    Route::get('usersuper/{admin}/edit', [UserSuperController::class,'edit']);
    Route::put('usersuper/{admin}', [UserSuperController::class,'update']);
    Route::delete('usersuper/{admin}', [UserSuperController::class,'destroy']);
    // User
    Route::get('user', [UserController::class,'index']);
    Route::get('user/create', [UserController::class,'create']);
    Route::post('user', [UserController::class,'store']);
    Route::get('user/{user}', [UserController::class,'show']);
    Route::get('user/{user}/edit', [UserController::class,'edit']);
    Route::put('user/{user}', [UserController::class,'update']);
    Route::delete('user/{user}', [UserController::class,'destroy']);

});
// Tampilan Admin
Route::prefix('data-manager')->group(function(){
    // Berita
    Route::get('berita', [BeritaController::class,'index']);
    Route::get('berita/create', [BeritaController::class,'create']);
    Route::post('berita', [BeritaController::class,'store']);
    Route::get('berita/{berita}', [BeritaController::class,'show']);
    Route::get('berita/{berita}/edit', [BeritaController::class,'edit']);
    Route::put('berita/{berita}', [BeritaController::class,'update']);
    Route::delete('berita/{berita}', [BeritaController::class,'destroy']);

    // Video
    Route::get('video', [VideoController::class,'index']);
    Route::get('video/create', [VideoController::class,'create']);
    Route::post('video', [VideoController::class,'store']);
    Route::get('video/{video}', [VideoController::class,'show']);
    Route::get('video/{video}/edit', [VideoController::class,'edit']);
    Route::put('video/{video}', [VideoController::class,'update']);
    Route::delete('video/{video}', [VideoController::class,'destroy']);

    // Iklan
    Route::get('iklan', [IklanController::class,'index']);
    Route::get('iklan/create', [IklanController::class,'create']);
    Route::post('iklan', [IklanController::class,'store']);
    Route::get('iklan/{iklan}', [IklanController::class,'show']);
    Route::get('iklan/{iklan}/edit', [IklanController::class,'edit']);
    Route::put('iklan/{iklan}', [IklanController::class,'update']);
    Route::delete('iklan/{iklan}', [IklanController::class,'destroy']);

    // Faqs
    Route::get('faq', [FaqController::class,'index']);
    Route::get('faq/create', [FaqController::class,'create']);
    Route::post('faq', [FaqController::class,'store']);
    Route::get('faq/{faq}', [FaqController::class,'show']);
    Route::get('faq/{faq}/edit', [FaqController::class,'edit']);
    Route::put('faq/{faq}', [FaqController::class,'update']);
    Route::delete('faq/{faq}', [FaqController::class,'destroy']);

    // SOP
    Route::get('sop', [SopController::class,'index']);
    Route::get('sop/create', [SopController::class,'create']);
    Route::post('sop', [SopController::class,'store']);
    Route::get('sop/{sop}', [SopController::class,'show']);
    Route::get('sop/{sop}/edit', [SopController::class,'edit']);
    Route::put('sop/{sop}', [SopController::class,'update']);
    Route::delete('sop/{sop}', [SopController::class,'destroy']);
});
