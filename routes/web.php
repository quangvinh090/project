<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\User\Homecontroller;
use App\Http\Controllers\Admin\CategoryController;
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
    return view('user.product.index');
});

Route::prefix('user')->name('user.')->group(function () {
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/',[HomeController::class,'index'])->name('index');
        Route::get('index',[HomeController::class, 'index'])->name('index');

        Route::get('Contact',[HomeController::class, 'Contact'])->name('Contact');
        Route::post('store',[HomeController::class, 'store'])->name('store');
        

    });
});


Route::get('/takemail/{id}',[HomeController::class,'sentEmail'])->name('sentEmail');



        
Route::prefix('admin')->name('admin.')->group(function(){
    Route::prefix('category')->name('category.')->group(function(){
        Route::get('/',[CategoryController::class, 'index'])->name('index');
        Route::get('index',[CategoryController::class, 'index'])->name('index');

        Route::get('delete/{id}',[CategoryController::class, 'delete'])->name('delete')->where('id', '[0-9]+');

        Route::get('create',[CategoryController::class, 'create'])->name('create');
        Route::post('store',[CategoryController::class, 'store'])->name('store');

        Route::get('edit/{id}',[CategoryController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}',[CategoryController::class, 'update'])->name('update')->where('id', '[0-9]+');
    });
    Route::prefix('contact')->name('contact.')->group(function(){
        Route::get('/',[ContactController::class, 'index'])->name('index');
        Route::get('index',[ContactController::class, 'index'])->name('index');
        Route::get('delete/{id}',[ContactController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });
});