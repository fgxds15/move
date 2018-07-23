<?php

class LoginController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function login(){
		
		
		$Admins = new Admins();
		$Admins = Admins::where("usuario", "=",  Input::get('login') )->first();
		if(!isset($Admins->id)){
			Session::flush('user');
			return Redirect::to('/admin');
		}
		
		
		if(($Admins->senha == Input::get('senha'))and($Admins->ativo == 1 )){
			Session::put('user', $Admins->toArray());
			return Redirect::to('/home');
		}else{
			Session::flush('user');
			return Redirect::to('/admin');
		}

	}

	public function login_token(){
		
	
		$Filiais = new Filiais();
		$Filiais = Filiais::where("usuario", "=",  Input::get('login') )->first();
		if(!isset($Filiais->id)){
			Session::flush('token');
			return Redirect::to('/token');
		}
			
		
		if($Filiais->senha == Input::get('senha')){
			Session::put('token', $Filiais->toArray());
			return Redirect::to('/token-inicial');
		}else{
			Session::flush('token');
			return Redirect::to('/token');
		}

	}

	public function login_telao(){
	
		$Filiais = new Filiais();
		$Filiais = Filiais::where("usuario", "=",  Input::get('login') )->first();
		if(!isset($Filiais->id)){
			Session::flush('telao');
			return Redirect::to('/telao');
		}
			
		
		if($Filiais->senha == Input::get('senha')){
			Session::put('token', $Filiais->toArray());
			return Redirect::to('/telao-inicial');
		}else{
			Session::flush('telao');
			return Redirect::to('/telao');
		}

	}	

	
	public function login_atendente(){

		$Atendente = new Atendentes();
		$Atendente = Atendentes::where("usuario", "=",  Input::get('login') )->first();

		if( (isset($Atendente->id))and($Atendente->senha == Input::get('senha'))){
			$Guiche = new Guiches();
			$Guiche = Guiches::where("id_filial", "=",  $Atendente->id_filial )->get();
			Session::put('user', $Atendente->toArray() );
			return View::make('atendent-seleciona')->with("guiche_array", $Guiche );
		}else{
			Session::flush('user');
			return Redirect::to('/atendente');
		}
	}


	public function logoff(){
		Session::flush('user');
		return Redirect::to('/admin');
	}

}
