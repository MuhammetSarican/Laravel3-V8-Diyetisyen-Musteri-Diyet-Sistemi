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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
//Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('homepage');
//Route::get('/aboutus',[\App\Http\Controllers\HomeController::class,'aboutus'])->name('aboutus');

//Route::get('/', function () {
//    return view('home.index');
//});

Route::get('/home', function () {
    return view('layouts.home');
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin_index')->middleware([\App\Http\Middleware\Authenticate::class]);

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home_index');

Route::get('/aboutus',[\App\Http\Controllers\HomeController::class,'aboutus'])->name('home_aboutus');
Route::get('/references',[\App\Http\Controllers\HomeController::class,'references'])->name('home_references');
Route::get('/faq',[\App\Http\Controllers\HomeController::class,'faq'])->name('home_faq');
Route::get('/contact',[\App\Http\Controllers\HomeController::class,'contact'])->name('home_contact');


Route::get('/admin/login',[\App\Http\Controllers\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[\App\Http\Controllers\HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout',[\App\Http\Controllers\HomeController::class,'logout'])->name('all_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/',[\App\Http\Controllers\admin\HomeController::class,'index'])->name('admin_home');

    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

    //Treatment
    Route::prefix('treatment')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\TreatmentController::class,'index'])->name('admin_treatments');
        Route::get('create',[\App\Http\Controllers\Admin\TreatmentController::class,'create'])->name('admin_treatment_add');
        Route::post('store',[\App\Http\Controllers\Admin\TreatmentController::class,'store'])->name('admin_treatment_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\TreatmentController::class,'edit'])->name('admin_treatment_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\TreatmentController::class,'update'])->name('admin_treatment_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\TreatmentController::class,'destroy'])->name('admin_treatment_delete');
        Route::get('show',[\App\Http\Controllers\Admin\TreatmentController::class,'show'])->name('admin_treatment_show');
    });
    //Image
    Route::prefix('image')->group(function (){
      //  Route::get('/',[\App\Http\Controllers\Admin\ImageController::class,'index'])->name('admin_treatments');
        Route::get('create/{treatment_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{treatment_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id},{treatment_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });
    //Setting

    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');


});
