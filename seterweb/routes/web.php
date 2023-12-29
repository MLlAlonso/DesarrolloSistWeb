<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsuarioController;

//URL Index
Route::view('/', 'index')->name('index');
//URL Product
Route::view('/products', 'productos')->name('products');
//URL Brands
Route::view('/brands', 'marcas')->name('brands');
//URL AboutUs
Route::view('/aboutus', 'aboutus')->name('aboutus');
//URL Product Form
Route::view('/productForm', 'productForm')->name('productForm');
//URL LogIn
Route::view('/login', 'login')->name('login');
//URL SignUp
Route::view('/signup', 'signUp')->name('signUp');



Route::post('/addProduct', [ProductController::class, 'create']);
Route::post('/productList', [ProductController::class, 'index']);

Route::post('/login', [UsuarioController::class, 'index']) ->name('loginPost');
Route::post('/signup', [UsuarioController::class, 'create']) ->name('signupPost');



// Route::get('brands', fn() => view('marcas')) -> name ('brands');

/* Route::get('/', function () {
    return view('welcome');
});
*/