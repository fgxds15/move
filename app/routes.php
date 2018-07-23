<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|


Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::get('/admin', function()
{
	return View::make('login');
});


Route::post("/login", "LoginController@login");


Route::get('totem', function()
{
	return View::make('login-token');
});

Route::get('token', function()
{
	return View::make('login-token');
});

Route::post("/token", "LoginController@login_token");

Route::get('token-inicial', function()
{
	return View::make('client-login2');
});

Route::post('message', "ChatClientController@novochamado");

Route::get('/telao', function()
{
	return View::make('login-telao');
});

Route::post("/login-telao", "LoginController@login_telao");

Route::get("telao-inicial", "TelaoController@telaochamados");



Route::post('messagem_login', "LoginController@login_atendente");

Route::get('atendente/seleciona/{guiche}', "ChatAtendentController@seleocina");



Route::get('/logoff', 'LoginController@logoff' );

Route::get('atendente', function()
{
	return View::make('atendent-login');
});





Route::get('/messagem_atendent/{indice}/{id}', "ChatAtendentController@voltar");

Route::post('/messagem_atendent', "ChatAtendentController@confirma");




Route::get('novo', "ChatAtendentController@buscar");



Route::get("/home", "UserController@Inicial");

Route::get("/admin/administrador", "UserController@administradores");
Route::post("/admin/administrador/novo", "UserController@administradores_novo");
Route::post("/admin/administrador/editar", "UserController@administradores_editar");

Route::get("/admin/guiche", "UserController@guiches");
Route::post("/admin/guiche/novo" , "UserController@guiche_novo");
Route::post("/admin/guiche/editar" , "UserController@guiche_editar");
Route::post("/admin/guiche/excluir" , "UserController@guiche_excluir");

Route::get("/admin/atendente", "UserController@atendente");
Route::post("/admin/atendente/novo" , "UserController@atendente_novo");
Route::post("/admin/atendente/editar" , "UserController@atendente_editar");
Route::post("/admin/atendente/excluir" , "UserController@atendente_excluir");

Route::get("/admin/categorias", "UserController@categorias");
Route::post("/admin/categoria/novo" , "UserController@categoria_novo");
Route::post("/admin/categoria/editar" , "UserController@categoria_editar");
Route::post("/admin/categoria/excluir" , "UserController@categoria_excluir");

Route::get("/admin/motivo", "UserController@motivos");
Route::post("/admin/motivo/novo" , "UserController@motivo_novo");
Route::post("/admin/motivo/editar" , "UserController@motivo_editar");
Route::post("/admin/motivo/excluir" , "UserController@motivo_excluir");

Route::get("/admin/chamado", "UserController@chamados");
Route::post("/admin/chamado/editar" , "UserController@chamado_editar");

Route::get("/admin/fila", "UserController@filas");
Route::post("/admin/fila/preferencial" , "UserController@fila_editar");

Route::get("/admin/filiais", "UserController@filiais");		
Route::post("/admin/filial/novo" , "UserController@filial_novo");
Route::post("/admin/filial/editar" , "UserController@filial_editar");
Route::post("/admin/filial/excluir" , "UserController@filial_excluir");

Route::get("/admin/ferramentas", "UserController@ferramentas");
Route::post("/admin/ferramenta/editar" , "UserController@ferramenta_editar");

