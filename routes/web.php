<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CadastroClienteController;

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


/*ROTA ORCAMENTO */ 

Route::get('/orcamento', 'CadastroController@index');
Route::resource('/orcamento','CadastroController');

/* ROTA alternativa para paginação*/
//Route::get('/orcamento/{id}', 'CadastroController@pagina');


/*Delete*/


/*ROTA CLIENTE*/

/*Create*/
Route::get('/cliente', 'CadastroClienteController@create');
Route::post('/cliente', 'CadastroClienteController@store');



/*ROTA FUNCIONARIO */

/*Create*/
Route::get('/funcionario', 'CadastroFuncionarioController@create');
Route::post('/funcionario', 'CadastroFuncionarioController@store');
