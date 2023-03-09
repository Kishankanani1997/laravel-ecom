<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageOrderController;
use App\Http\Controllers\AddGalleryController;
use App\Http\Controllers\AddBlogsController;
use App\Http\Controllers\AddCategoryController;
use App\Http\Controllers\AddSubCategoryController;
use App\Http\Controllers\AddProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutusController;
// use App\Http\Controllers\ViewCartController;

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
    return view('content');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





//Here we write Routing for Navbar Link

// Routing for Addgallery
Route::get('/navbar.addgallery',[AddGalleryController::class, 'index']);
Route::post('/navbar.addgallery',[AddGalleryController::class,'store']);
Route::get('/navbar.managegallery',[AddGalleryController::class,'show']);
Route::get('/navbar.managegallery/{id}',[AddGalleryController::class,'destroy']);
Route::get('/navbar.editgallery/{id}',[AddGalleryController::class,'edit']);
Route::post('/navbar.editgallery/{id}',[AddGalleryController::class,'update']);


// Routing for addblog
Route::get('/navbar.addblogs',[AddBlogsController::class,'index']);
Route::post('/navbar.addblogs',[AddBlogsController::Class,'store']);
Route::get('/navbar.manageblogs',[AddBlogsController::class,'show']);
Route::get('/navbar.manageblogs/{id}',[AddBlogsController::class,'destroy']);
Route::get('/navbar.editblogs/{id}',[AddBlogsController::class,'edit']);
Route::post('/navbar.editblogs/{id}',[AddBlogsController::class,'update']);

//Routing for addcategory
Route::get('/navbar.addcategory',[AddCategoryController::class,'index']);
Route::post('/navbar.addcategory',[AddCategoryController::class,'store']);
Route::get('/navbar.managecategory',[AddCategoryController::class,'show']);
Route::get('/navbar.managecategory/{id}',[AddCategoryController::class,'destroy']);
Route::get('/navbar.editcategory/{id}',[AddCategoryController::class,'edit']);
Route::post('/navbar.editcategory/{id}',[AddCategoryController::Class,'update']);

//Routing for addsubcategory
Route::get('/navbar.addsubcategory',[AddSubCategoryController::class,'index']);
Route::post('/navbar.addsubcategory',[AddSubCategoryController::Class,'store']);
Route::get('/navbar.managesubcategory',[AddSubCategoryController::class,'show']);
Route::get('/navbar.managesubcategory/{id}',[AddSubCategoryController::class,'destroy']);
Route::get('/navbar.editsubcategory/{id}',[AddSubCategoryController::class,'edit']);
Route::post('/navbar.editsubcategory/{id}',[AddSubCategoryController::Class,'update']);

//Routing for Addproducts
Route::get('/navbar.addproducts',[AddProductsController::class,'index']);
Route::post('/navbar.addproducts',[AddProductsController::class,'store']);
Route::get('/navbar.manageproducts',[AddProductsController::class,'show']);
Route::get('/navbar.manageproducts/{id}',[AddProductsController::class,'destroy']);
Route::get('/navbar.editproducts/{id}',[AddProductsController::class,'edit']);
Route::post('/navbar.editproducts/{id}',[AddProductsController::Class,'update']);

//Routing for Contactus
Route::get('contact',[ContactController::class,'index']);
Route::post('contact',[ContactController::class,'store']);

//Routing for Contactus
Route::get('aboutus',[AboutusController::class,'index']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
