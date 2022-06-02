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
Route::get('/test', '\App\Http\Controllers\Controller@test')->name('test');

Route::get('/', '\App\Http\Controllers\TovarController@index')->name('home'); //роут для главной страницы
Route::get('/ideasforcake', function () { return view('main.ideasforcake'); })->name('ideasforcake'); //роут для страницы с идеями для тортов
Route::get('/catalog', function () { return view('catalog'); })->name('catalog'); //роут для основного каталога
Route::get('/contacts', function () { return view('contacts'); })->name('contacts'); //роут для страницы с магазинами
Route::get('/teams', function () { return view('teams'); })->name('teams'); //роут для страницы с командой
Route::get('/download', function () { return view('download'); })->name('download'); //роут для страницы с приложением для загрузки
Route::get('/signin', function () { return view('signin'); })->name('signin'); //роут для страницы с авторизацией
Route::get('/signup', function () { return view('signup'); })->name('signup'); //роут для страницы с регистрацией
Route::get('/recovery', function () { return view('recovery'); })->name('recovery'); //роут для страницы с восстановлением пароля с вводом email
Route::get('/recovery_pass', function () { return view('recovery_pass'); })->name('recovery_pass'); //роут для страницы с восстановлением пароля с вводом пароля

Route::post('/recovery_msg', '\App\Http\Controllers\KlientController@recovery_msg')->name('recovery_msg'); //роут для страницы с отправкой сообщения для восстановления пароля
Route::post('/recovery_pass/{id}', '\App\Http\Controllers\KlientController@recovery_pass')->name('recovery_pass_reg'); //роут для страницы с восстановлением пароля

Route::get('/accaunt', '\App\Http\Controllers\KlientController@accaunt')->name('accaunt'); //роут для страницы аккаунта
Route::get('/activation/{hash}', '\App\Http\Controllers\KlientController@activation')->name('activation'); //роут для старницы активации
Route::get('/exit', '\App\Http\Controllers\KlientController@exit')->name('exit'); //роут для страницы выходы

Route::get('/adminpanel', '\App\Http\Controllers\Admin\PanelController@index')->name('adminpanel'); //роут для страницы админки

Route::get('/tovarsview/{categ}/{pole}/{sort}/{title}', '\App\Http\Controllers\TovarController@tovarsview')->name('tovarsview'); //роут для страницы каталога Сахарной мастики
Route::get('/tovarsisomalt/{categ}/{pole}/{sort}/{title}', '\App\Http\Controllers\TovarController@tovarsisomalt')->name('tovarsisomalt'); //роут для страницы каталога Изомальт
Route::get('/tovarsbeze/{categ}/{pole}/{sort}/{title}', '\App\Http\Controllers\TovarController@tovarsbeze')->name('tovarsbeze'); //роут для страницы каталога Безе
Route::get('/tovarsmarshm/{categ}/{pole}/{sort}/{title}', '\App\Http\Controllers\TovarController@tovarsmarshm')->name('tovarsmarshm'); //роут для страницы каталога Маршмэллоу
Route::get('/saletovars', '\App\Http\Controllers\TovarController@saletovars')->name('saletovars'); //роут для страницы с акционными товарами
Route::get('/besttovars', '\App\Http\Controllers\TovarController@besttovars')->name('besttovars'); //роут для страницы с товарами-бестселлерами

Route::get('/adminpanel/search', '\App\Http\Controllers\Admin\TovarController@search')->name('search'); //роут для поиска в админке

Route::post('/addcart/{id}', '\App\Http\Controllers\KorsinaController@addcart')->name('addcart'); //роут для добавления товара в корзину
Route::post('/deleteposgu/{numb}', '\App\Http\Controllers\KorsinaController@deleteposgu')->name('deleteposgu'); //роут для удаления товара из корзины неавторизованного пользователя
Route::post('/shoregorder', '\App\Http\Controllers\KorsinaController@shoregorder')->name('shoregorder'); //роут для страницы с регистрацией заказа
Route::post('/regorder', '\App\Http\Controllers\KorsinaController@regorder')->name('regorder'); //роут для регистрации заказа

Route::post('/cabinet', '\App\Http\Controllers\KlientController@signin')->name('signin_cabinet');  //роут для входа в личный кабинет

//"ресурсные роуты"
Route::resource('tovars', \App\Http\Controllers\TovarController::class);
Route::resource('clients', \App\Http\Controllers\KlientController::class);
Route::resource('basket', \App\Http\Controllers\KorsinaController::class);

//"ресурсные роуты" для админки
Route::resource('admintovars', \App\Http\Controllers\Admin\TovarController::class);
Route::resource('adminclients', \App\Http\Controllers\Admin\ClientController::class);
Route::resource('adminbasket', \App\Http\Controllers\Admin\BasketController::class);
Route::resource('adminorders', \App\Http\Controllers\Admin\OrdersController::class);
