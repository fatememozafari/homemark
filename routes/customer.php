<?php

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




Route::name('customer.')->group(function() {

    // home route
    Route::get('/', [\App\Http\Controllers\Customer\HomeController::class, 'index'])->name('home');


    // about-us route
    Route::get('/about-us', [\App\Http\Controllers\Customer\AboutController::class,'index'])->name('about.index');

    // bookmark route
    Route::get('/bookmark', [\App\Http\Controllers\Customer\BookMarkController::class,'index'])->name('bookmark.index');
    Route::get('/bookmark/store/{id}', [\App\Http\Controllers\Customer\BookMarkController::class,'store'])->name('bookmark.store');
    Route::get('/bookmark/delete/{id}', [\App\Http\Controllers\Customer\BookMarkController::class,'delete'])->name('bookmark.delete');


    // newsletter route
    Route::get('/newsletter',[\App\Http\Controllers\Customer\NewsletterController::class , 'index'])->name('newsletter.index');
    Route::get('/newsletter/store',[\App\Http\Controllers\Customer\NewsletterController::class , 'store'])->name('newsletter.store');


    // contact-us route
    Route::get('/contact-us',[\App\Http\Controllers\Customer\ContactController::class,'index'])->name('contact.index');
    Route::get('/contact-us/create',[\App\Http\Controllers\Customer\ContactController::class,'create'])->name('contact.create');
    Route::post('/contact-us/store',[\App\Http\Controllers\Customer\ContactController::class,'store'])->name('contact.store');


    // user route
    Route::get('/user',[\App\Http\Controllers\Customer\UserController::class,'index'])->name('user.index');
    Route::get('/profile',[\App\Http\Controllers\Customer\UserController::class,'show'])->name('user.profile');
    Route::post('/profile/{user}/update',[\App\Http\Controllers\Customer\UserController::class,'update'])->name('user.update');


    // staff route
    Route::get('/staff/create/{user}',[\App\Http\Controllers\Customer\StaffController::class, 'store'])->name('staff.store');

    Route::get('/staff',[\App\Http\Controllers\Customer\StaffController::class, 'index'])->name('staff.index');
    Route::get('/staff/{staff}/edit',[\App\Http\Controllers\Customer\StaffController::class, 'edit'])->name('staff.edit');
    Route::post('/staff/{staff}/update',[\App\Http\Controllers\Customer\StaffController::class, 'update'])->name('staff.update');
    Route::get('/staff/delete/{staff}',[\App\Http\Controllers\Customer\StaffController::class, 'destroy'])->name('staff.delete');


    // item route
    Route::get('/deleted-item',[\App\Http\Controllers\Customer\ItemController::class, 'removedItem'])->name('item.deleted-item');
    Route::get('/item/sale',[\App\Http\Controllers\Customer\ItemController::class, 'forSale'])->name('item.forSale');
    Route::get('/item/rent',[\App\Http\Controllers\Customer\ItemController::class, 'forRent'])->name('item.forRent');
    Route::get('/item',[\App\Http\Controllers\Customer\ItemController::class, 'index'])->name('item.index');
    Route::get('/item/create',[\App\Http\Controllers\Customer\ItemController::class, 'create'])->name('item.create');
    Route::post('/item/store',[\App\Http\Controllers\Customer\ItemController::class, 'store'])->name('item.store');
    Route::get('/item/{item}/edit',[\App\Http\Controllers\Customer\ItemController::class, 'edit'])->name('item.edit');
    Route::post('/item/{item}/update',[\App\Http\Controllers\Customer\ItemController::class, 'update'])->name('item.update');
    Route::get('/item/{item}/show',[\App\Http\Controllers\Customer\ItemController::class, 'show'])->name('item.show');
    Route::get('/item/delete/{item}',[\App\Http\Controllers\Customer\ItemController::class, 'destroy'])->name('item.delete');
    Route::get('/item/restore/{item}',[\App\Http\Controllers\Customer\ItemController::class, 'restore'])->name('item.restore');


    // config route
    Route::get('/config/edit',[\App\Http\Controllers\Customer\ConfigController::class, 'edit'])->name('config.edit');
    Route::post('/config/update',[\App\Http\Controllers\Customer\ConfigController::class, 'update'])->name('config.update');



});
