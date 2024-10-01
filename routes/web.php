<?php


use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddCategoryController;
use App\Http\Controllers\AddproductController;




// Admin Login Routes
Route::get('/adminlogin', [AdminController::class, 'showLoginForm'])->name('adminlogin');
Route::post('/adminlogin', [AdminController::class, 'login'])->name('adminlogin');

Route::get('/admindashboard', [AdminController::class, 'showdashboard'])->name('admindashboard');
//Route::post('/admindashboard', [AdminController::class, 'login'])->name('admindashboard');
Route::get('/adminaddproduct', [AdminController::class, 'showaddpdt'])->name('adminaddpdt');






// routes/web.php

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');


// Route to display products based on category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [ProductController::class, 'show'])->name('categories.show')->middleware('auth.user');




Route::get('/', function () {
    return view('home');
})->name('home');






// routes/web.php



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');


//Registration based routes


// Route to show the registration form
Route::get('/register', [CustomerController::class, 'showRegistrationForm'])->name('register.view');

// Route to handle the registration form submission
Route::post('/register', [CustomerController::class, 'register'])->name('register');


Route::get('order-history', function () {
    return view('order-history');
})->name('order.history');



Route::get('payment', [PaymentController::class, 'showPaymentForm'])->name('payment');
Route::post('payment', [PaymentController::class, 'processPayment'])->name('processPayment');







// Route to show the form for adding a new category

Route::get('/category/create', [AddCategoryController::class, 'create'])->name('categories.create');
Route::post('/category/store', [AddCategoryController::class, 'store'])->name('categories.store');




Route::get('/products/create', [AddproductController::class, 'create'])->name('addproducts.create');
Route::post('/products/store', [AddproductController::class, 'store'])->name('addproducts.store');



Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::post('cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');



