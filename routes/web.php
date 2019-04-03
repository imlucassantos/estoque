<?php


use estoque\User;
use estoque\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


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

Route::get('/produtos', 'ProdutoController@lista');

Route::get(
    '/produtos/mostra/{id}',
    'ProdutoController@mostra'
)
->where('id', '[0-9]+');

Route::get(
    '/produtos/editar/{id}',
    'ProdutoController@editar'
);

Route::post('/produtos/altera/{id}', 'ProdutoController@altera');

Route::get('/produtos/adiciona', 'ProdutoController@novo');

Route::post('/produtos/novo', 'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::get('/login', 'LoginController@login');

Route::get('/', 'ProdutoController@lista');

Route::get('/produtos/remove/{id}', [
    'middleware' => 'nosso-middleware',
    'uses' => 'ProdutoController@remove'
]);

Auth::routes();
Route::get('/home', 'ProdutoController@lista')->name('home');



