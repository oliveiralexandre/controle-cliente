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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/pagamento/resposta/{status?}', 'WelcomeController@pagamento')
    ->name('pagamento.resposta');

Route::get('/pagamento/notificacao/ipn', 'WelcomeController@notificacao')
    ->name('pagamento.notificacao.ipn');

Route::get('/contato', 'ContatoController@index')->name('contato');
Route::post('/contato', 'ContatoController@store')->name('contato.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/painel', 'HomeController@index')->name('home');

Route::resource('clientes', 'ClienteController');
Route::resource('produtos', 'ProdutoController');
Route::resource('veiculos', 'VeiculoController');
Route::resource('contratos', 'ContratoController');
Route::resource('mensalidades', 'MensalidadeController');
