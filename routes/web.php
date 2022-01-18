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

Route::get('/deneme', function () {
    return view('home.user_appointment');
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin_index')->middleware([\App\Http\Middleware\Authenticate::class]);

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home_index');

Route::get('/aboutus', [\App\Http\Controllers\HomeController::class, 'aboutus'])->name('home_aboutus');
Route::get('/references', [\App\Http\Controllers\HomeController::class, 'references'])->name('home_references');
Route::get('/faq', [\App\Http\Controllers\HomeController::class, 'faq'])->name('home_faq');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('home_contact');
Route::get('/treatment/{id}', [\App\Http\Controllers\HomeController::class, 'treatment'])->name('treatment');
Route::get('/categoryalltreatments', [\App\Http\Controllers\HomeController::class, 'categoryalltreatments'])->name('categoryalltreatments');
Route::get('/categorytreatments/{id}', [\App\Http\Controllers\HomeController::class, 'categorytreatments'])->name('categorytreatments');
Route::post('/gettreatment', [\App\Http\Controllers\HomeController::class, 'gettreatment'])->name('gettreatment');
Route::get('/treatmentlist/{search}', [\App\Http\Controllers\HomeController::class, 'treatmentlist'])->name('treatmentlist');
Route::post('/sendmessage', [\App\Http\Controllers\HomeController::class, 'sendmessage'])->name('home_sendmessage');


Route::get('/admin/login', [\App\Http\Controllers\HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [\App\Http\Controllers\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('all_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//User Controller
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/myprofile', [\App\Http\Controllers\UserController::class, 'index'])->name('user_profile');
    Route::get('/myreviews', [\App\Http\Controllers\UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/deletemyreview/{id}', [\App\Http\Controllers\UserController::class, 'destroymyreview'])->name('destroymyreview');

});


Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    //Route::get('/profile', [\App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin_home');

    //Treatment
    Route::prefix('treatment')->group(function () {
        Route::get('/', [\App\Http\Controllers\TreatmentController::class, 'index'])->name('user_treatments');
        Route::get('create', [\App\Http\Controllers\TreatmentController::class, 'create'])->name('user_treatment_add');
        Route::post('store', [\App\Http\Controllers\TreatmentController::class, 'store'])->name('user_treatment_store');
        Route::get('edit/{id}', [\App\Http\Controllers\TreatmentController::class, 'edit'])->name('user_treatment_edit');
        Route::post('update/{id}', [\App\Http\Controllers\TreatmentController::class, 'update'])->name('user_treatment_update');
        Route::get('delete/{id}', [\App\Http\Controllers\TreatmentController::class, 'destroy'])->name('user_treatment_delete');
        Route::get('show', [\App\Http\Controllers\TreatmentController::class, 'show'])->name('user_treatment_show');
    });
    //Image
    Route::prefix('image')->group(function () {
        //  Route::get('/',[\App\Http\Controllers\ImageController::class,'index'])->name('user_treatments');
        Route::get('create/{treatment_id}', [\App\Http\Controllers\ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{treatment_id}', [\App\Http\Controllers\ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id},{treatment_id}', [\App\Http\Controllers\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show', [\App\Http\Controllers\ImageController::class, 'show'])->name('user_image_show');
    });
    //Order
    Route::prefix('order')->group(function () {
        Route::get('/', [\App\Http\Controllers\OrderController::class, 'index'])->name('user_orders');
        Route::get('create/{id}', [\App\Http\Controllers\OrderController::class, 'create'])->name('user_order_add');
        Route::post('store/{id}', [\App\Http\Controllers\OrderController::class, 'store'])->name('user_order_store');
        Route::get('edit/{id}', [\App\Http\Controllers\OrderController::class, 'edit'])->name('user_order_edit');
        Route::post('update/{id}', [\App\Http\Controllers\OrderController::class, 'update'])->name('user_order_update');
        Route::get('delete/{id}', [\App\Http\Controllers\OrderController::class, 'destroy'])->name('user_order_delete');
        Route::get('show', [\App\Http\Controllers\OrderController::class, 'show'])->name('user_order_show');
    });
    //Appointment
    Route::prefix('appointment')->group(function () {
        Route::get('/', [\App\Http\Controllers\AppointmentController::class, 'index'])->name('user_appointments');
        Route::get('create', [\App\Http\Controllers\AppointmentController::class, 'create'])->name('user_appointment_add');
        Route::post('store', [\App\Http\Controllers\AppointmentController::class, 'store'])->name('user_appointment_store');
        Route::get('edit/{id}', [\App\Http\Controllers\AppointmentController::class, 'edit'])->name('user_appointment_edit');
        Route::post('update/{id}', [\App\Http\Controllers\AppointmentController::class, 'update'])->name('user_appointment_update');
        Route::get('delete/{id}', [\App\Http\Controllers\AppointmentController::class, 'destroy'])->name('user_appointment_delete');
        Route::get('show', [\App\Http\Controllers\AppointmentController::class, 'show'])->name('user_appointment_show');
    });
    //Process
    Route::prefix('process')->group(function () {
        Route::get('/', [\App\Http\Controllers\ProcessController::class, 'index'])->name('user_processes');
        Route::get('create', [\App\Http\Controllers\ProcessController::class, 'create'])->name('user_process_add');
        Route::post('store', [\App\Http\Controllers\ProcessController::class, 'store'])->name('user_process_store');
        Route::get('edit/{id}', [\App\Http\Controllers\ProcessController::class, 'edit'])->name('user_process_edit');
        Route::post('update/{id}', [\App\Http\Controllers\ProcessController::class, 'update'])->name('user_process_update');
        Route::get('delete/{id}', [\App\Http\Controllers\ProcessController::class, 'destroy'])->name('user_process_delete');
        Route::get('show', [\App\Http\Controllers\ProcessController::class, 'show'])->name('user_process_show');
    });

});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::middleware('admin')->group(function () {

        Route::get('/', [\App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin_home');

        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

        //Treatment
        Route::prefix('treatment')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\TreatmentController::class, 'index'])->name('admin_treatments');
            Route::get('create', [\App\Http\Controllers\Admin\TreatmentController::class, 'create'])->name('admin_treatment_add');
            Route::post('store', [\App\Http\Controllers\Admin\TreatmentController::class, 'store'])->name('admin_treatment_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\TreatmentController::class, 'edit'])->name('admin_treatment_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\TreatmentController::class, 'update'])->name('admin_treatment_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\TreatmentController::class, 'destroy'])->name('admin_treatment_delete');
            Route::get('show', [\App\Http\Controllers\Admin\TreatmentController::class, 'show'])->name('admin_treatment_show');
        });

        Route::prefix('messages')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_messages');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        });

        //Image
        Route::prefix('image')->group(function () {
            //  Route::get('/',[\App\Http\Controllers\Admin\ImageController::class,'index'])->name('admin_treatments');
            Route::get('create/{treatment_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{treatment_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id},{treatment_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });

        //Setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        //Faq
        Route::prefix('faq')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');
        });

        //Review
        Route::prefix('review')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::get('create', [\App\Http\Controllers\Admin\ReviewController::class, 'create'])->name('admin_review_add');
            Route::post('store', [\App\Http\Controllers\Admin\ReviewController::class, 'store'])->name('admin_review_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'edit'])->name('admin_review_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
        });

        //Order
        Route::prefix('order')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin_orders');
            Route::get('create/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'create'])->name('admin_order_add');
            Route::post('store/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'store'])->name('admin_order_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('admin_order_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'update'])->name('admin_order_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('admin_order_delete');
            Route::get('show', [\App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin_order_show');
        });

        //User
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::get('create/{id}', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store/{id}', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');

            Route::get('role/{id}', [\App\Http\Controllers\Admin\UserController::class, 'userroles'])->name('user_roles');
            Route::post('role/store/{id}', [\App\Http\Controllers\Admin\UserController::class, 'userrolesstore'])->name('user_role_add');
            Route::get('role/delete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'userrolesdelete'])->name('user_role_delete');

        });

        //Appointment
        Route::prefix('appointment')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\AppointmentController::class, 'index'])->name('admin_appointments');
            Route::get('create', [\App\Http\Controllers\Admin\AppointmentController::class, 'create'])->name('admin_appointment_add');
            Route::post('store', [\App\Http\Controllers\Admin\AppointmentController::class, 'store'])->name('admin_appointment_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\AppointmentController::class, 'edit'])->name('admin_appointment_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\AppointmentController::class, 'update'])->name('admin_appointment_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\AppointmentController::class, 'destroy'])->name('admin_appointment_delete');
            Route::get('show', [\App\Http\Controllers\Admin\AppointmentController::class, 'show'])->name('admin_appointment_show');
        });
    });
});
