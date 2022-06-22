<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
/*
 * Главная страница интернет-магазина
 */
Route::get('/', [MainController::class, 'home'])->name('home');
/*
 * Каталог товаров: категории,товары
 */
Route::get('/katalog', [MainController::class, 'katalog'])->name('katalog');
/*
 * Контактная информация
 */
Route::get('/kontact', [MainController::class, 'kontact'])->name('kontact');

/*
 * Страница о нас
 */
Route::get('/info', [MainController::class, 'info'])->name('info');

/*
 * Профиль
 */
Route::get('/category/{slug_category}/{slug_product}', [MainController::class, 'getPost'])->name('getPost');

Route::get('/category/{slug}', [MainController::class, 'getByCategory'])->name('getByCategory');


/*
 * Регистрация авторизация
 */
Route::get('/login', [MainController::class, 'login'])->name('sign_in');
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

/*
 * Регистрация, вход в ЛК
 */
Route::post('/login', [RegisterController::class, 'login'])->name('login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::group(['middleware' => 'auth'], function () {

    /*
     * Корзина пользователя
     */
    Route::get('/basket', [MainController::class, 'basket'])->name('basket');
    Route::post('/basketAdd/{product}', [MainController::class, 'basketAdd'])->name('basketAdd');
    Route::post('/basketMin/{product}', [MainController::class, 'basketMin'])->name('basketMin');
    Route::delete('/basketDelete/{basket}', [MainController::class, 'basketDelete'])->name('basketDelete');
    Route::delete('/basketAllDelete', [MainController::class, 'basketAllDelete'])->name('basketAllDelete');

    /*
     * Оформить заказ
     */
    Route::get('/checkout', [MainController::class, 'checkout'])->name('checkout');
    Route::post('/orderPost', [MainController::class, 'orderPost'])->name('orderPost');
    /*
 * Страница заказа
 */
    Route::get('/order', [MainController::class, 'order'])->name('order');
    /*
     * Избранное
     */
    Route::get('/favorites', [MainController::class, 'favorites'])->name('favorites');
    Route::get('/profile', [MainController::class, 'profile'])->name('profile');

    Route::post('/favouritesStore/{product}', [MainController::class, 'favouritesStore'])->name('favouritesStore');
    Route::delete('/favouriteDelete/{product}', [MainController::class, 'favouriteDelete'])->name('favouriteDelete');

    /*
 * Панель управления магазином для администратора сайта
 */
    Route::group(['middleware' => 'admin'], function () {
// только для админа
        // CRUD-операции над категориями каталога
        Route::get('/add_category', [MainController::class, 'add_category'])->name('add_category');
        Route::get('/edit_category/{id}', [MainController::class, 'edit_category'])->name('edit_category');
        // страница управление категориями
        Route::get('/categories', [MainController::class, 'categories'])->name('categories');

        Route::get('/orders', [MainController::class, 'orders'])->name('orders');
        // CRUD-операции над товарами каталога
        Route::get('/add_product', [MainController::class, 'add_product'])->name('add_product');
        Route::get('/edit_product/{id}', [MainController::class, 'edit_product'])->name('edit_product');
        // страница управление товаром
        Route::get('/products', [MainController::class, 'products'])->name('products');
        // главная страница панели управления
        Route::get('/admin', [MainController::class, 'admin'])->name('admin');
        // страница управление пользователями
        Route::get('/user', [MainController::class, 'user'])->name('user');
// страница управление товаром
        Route::resource('category', CategoryController::class);
        Route::resource('product', ProductController::class);
    });
});


