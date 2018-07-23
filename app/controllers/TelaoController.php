<?php

class TelaoController extends BaseController {

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

	public function telaochamados(){

		$Chamado = Chamados::where("id_filial", "=",  Session::get('token')["id"] )->where("id_atendente", "<>",  0 )->orderBy('visualizado', 'asc')->orderBy('preferencial', 'desc')->orderBy('id', 'desc')->take(5)->get();
		$a = 0 ;

		$Ferramenta = new Settings();
		$Ferramenta = Settings::where("nome", "like", "tempo_atualizacao_telao" )->first();
		$Tempo = $Ferramenta->valor  ;
		$Tempo *= 1000 ; 

		$Guiche = Guiches::all();
		$a = 0 ;
		$array_guiche[0]["nome"] = "Master" ;
		$array_guiche[0]["id"] = "" ;

		foreach ($Guiche as $user){
			$array_guiche[$user->id]["nome"] = $user->nome ;
			$array_guiche[$user->id]["id"] = $user->id ;
			$a++;
		}
		;
		if(count($Chamado) == 0 ){
			return View::make('telao_vazio')->with("tempo", $Tempo);
		}else if((isset($Chamado[0]->id))){
			$Chamado1 = Chamados::where("id", "=",  $Chamado[0]->id )->first();
			if(($Chamado1->visualizado == null)or($Chamado1->visualizado == '0000-00-00 00:00:00')){
				$Chamado1->visualizado = date('Y-m-d H:i:s') ; 
				$Chamado1->save();
			}
			return View::make('telao')
				->with("chamado", $Chamado)
				->with("tempo", $Tempo)
				->with( "guiche" , $array_guiche );
		}
	}
		
		

}
