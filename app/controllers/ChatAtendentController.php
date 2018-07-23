<?php

class ChatAtendentController extends BaseController {

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

	

	public function seleocina( $guiche ){

		Session::put('guiche',   $guiche  ) ;
		$Chamados = Chamados::all();
		$Chamados = Chamados::where( "id_atendente" , "=" , Session::get('user')['id'] )->orderBy('id', 'desc')->get();
		$Fila = Chamados::where("id_filial", "=",  Session::get('user')["id_filial"] )->where("id_atendente", "=",  null )->orderBy('preferencial', 'desc')->orderBy('id', 'asc')->get();
		return View::make('atendent-message')->with("atendente", Session::get('user'))
												->with("chamado", 0 )
												->with("chamados", $Chamados)
												->with("fila" , $Fila);
	}

	public function voltar( $indice , $id){
		$Chamado = Chamados::all();
		$Chamado = Chamados::where( "id" , "=" , $id )->first();
		if($indice == 1){
			
		}else{
			$Chamado->id_status = 4 ;
		}
		$Chamado->save();
		$Chamados = Chamados::all();
		$Chamados = Chamados::where( "id_atendente" , "=" , Session::get('user')['id'] )->orderBy('id', 'desc')->get();
		return View::make('atendent-message')->with("atendente", Session::get('user'))
												->with("chamado", 0 )
												->with("chamados", $Chamados);
		
	}

	public function confirma( ){
		$Chamado = Chamados::all();
		$Chamado = Chamados::where( "id" , "=" , Input::get('id') )->first();
		$Chamado->id_status = 3 ;
		$Chamado->finalizado = date('Y-m-d H:i:s');
		$Chamado->observacao = Input::get('observacao') ;
		$Chamado->id_categoria = Input::get('categoria') ;
		$Chamado->id_motivo = Input::get('motivo') ;
		$Chamado->save();
		$Chamados = Chamados::all();
		$Chamados = Chamados::where( "id_atendente" , "=" , Session::get('user')['id'] )->orderBy('id', 'desc')->get();

		$Fila = Chamados::where("id_filial", "=",  Session::get('user')["id_filial"] )->where("id_atendente", "=",  null )->orderBy('preferencial', 'desc')->orderBy('id', 'asc')->get();

		return View::make('atendent-message')->with("atendente", Session::get('user'))
												->with("chamado", 0 )
												->with("chamados", $Chamados)
												->with("fila" , $Fila);
		
	}

	public function buscar(){
		$Chamado = Chamados::all();
		$Chamado = Chamados::where("id_status", "=", 2 )->where("id_atendente", "=",  Session::get('user')['id'] )->orderBy('preferencial', 'desc')->orderBy('id', 'desc')->first();
			
		if(!isset($Chamado->id)){
			$Chamado = Chamados::where("id_filial", "=",  Session::get('user')["id_filial"] )->where("id_atendente", "=",  null )->orderBy('preferencial', 'desc')->orderBy('id', 'asc')->first();
			if(isset($Chamado->id)){

				$Chamado->id_atendente = Session::get('user')['id'];
				$Chamado->id_filial = Session::get('user')['id_filial'];
				$Chamado->id_guiche =  Session::get('guiche');
				$Chamado->id_status = 2 ;
				$Chamado->atendido = date('Y-m-d H:i:s');
				$Chamado->save();
			}else{
				$Chamado = 0 ;
			}
		}
		
		$Chamados = Chamados::all();
		$Chamados = Chamados::where( "id_atendente" , "=" , Session::get('user')['id'] )->orderBy('id', 'desc')->get();
		$Categoria = Categorias::all();
		$a = 0 ;
		$array_categoria[0]["nome"] = "Selecione a categoria" ;
		$array_categoria[0]["id"] = "" ;
		foreach ($Categoria as $user){
			$array_categoria[$user->id]["nome"] = $user->nome ;
			$array_categoria[$user->id]["id"] = $user->id ;
			$a++;
		}

		$Motivo = Motivos::all();
		$b = 0 ;
		$array_motivo[0]["nome"] = "Selecione o motivo" ;
		$array_motivo[0]["id"] = "" ;
		foreach ($Motivo as $user2){
			$array_motivo[$user->id]["nome"] = $user2->nome ;
			$array_motivo[$user->id]["id"] = $user2->id ;
			$b++;
		}

		$Fila = Chamados::where("id_filial", "=",  Session::get('user')["id_filial"] )->where("id_atendente", "=",  null )->orderBy('preferencial', 'desc')->orderBy('id', 'asc')->get();

		return View::make('atendent-message')->with( "atendente" , Session::get('user') )
											->with("chamado", $Chamado )
											->with("chamados", $Chamados)
											->with("categorias" , $array_categoria )
											->with("motivos" , $array_motivo )
											->with("fila" , $Fila);

	}


}
