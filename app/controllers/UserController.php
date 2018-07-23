<?php

class UserController extends BaseController {

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
	public function teste(){
		return Redirect::to('/')->withInput();
		break;
	}

	public function administradores(){
		$Admins = Admins::all();
		$Filial = Filiais::all();
		$a = 0 ;
		$array_filial[0]["nome"] = "Master" ;
		$array_filial[0]["id"] = "" ;
		foreach ($Filial as $user){
			$array_filial[$user->id]["nome"] = $user->nome ;
			$array_filial[$user->id]["id"] = $user->id ;
			$a++;
		}
		if($a == 0 ){
			return View::make('admin-administrador')->with("atendentes", $Admins)
											->with("filial", 0 );
		}else{
			return View::make('admin-administrador')->with("atendentes", $Admins)
											->with("filial", $array_filial);
		}
	}

	public function administradores_novo(){
		$Admins = new Admins();
		$Admins->usuario = Input::get('usuario') ;
		$Admins->senha = Input::get('senha') ;
		$Admins->id_filial = Input::get('filial') ;
		
		if( 1 == Input::get('atendente') ){
			$Admins->atendente = Input::get('atendente') ;
		}

		if( 1 ==Input::get('preferencial') ){
			$Admins->preferencial = Input::get('preferencial') ;
		}

		if( 1 ==Input::get('chamado') ){
			$Admins->chamado = Input::get('chamado') ;
		}

		if( 1 ==Input::get('guiche')  ){
			$Admins->guiche = Input::get('guiche') ;
		}
		$Admins->ativo = 1 ;
		$Admins->save();
		return Redirect::to('/admin/administrador');
	}

	public function administradores_editar(){
		$Admins = new Admins();
		$Admins = Admins::find(Input::get('id'));

		if(Input::get('deleta') == 1){
			$Admins->delete();
		}else{
			$Admins->usuario = Input::get('usuario') ;
			
			if( "" !== Input::get('senha') ){
				$Admins->senha = Input::get('senha') ;
			}

			$Admins->id_filial = Input::get('filial') ;
			
			if( 1 == Input::get('atendente') ){
				$Admins->atendente = Input::get('atendente') ;
			}else{
				$Admins->atendente = 0 ;
			}

			if( 1 == Input::get('preferencial') ){
				$Admins->preferencial = Input::get('preferencial') ;
			}else{
				$Admins->preferencial = 0 ;
			}

			if( 1 == Input::get('chamado') ){
				$Admins->chamado = Input::get('chamado') ;
			}else{
				$Admins->chamado = 0 ;
			}

			if( 1 == Input::get('guiche')  ){
				$Admins->guiche = Input::get('guiche') ;
			}else{
				$Admins->guiche = 0 ;
			}

			$Admins->save();
		}
		
		return Redirect::to('/admin/administrador');
	}


	public function atendente(){
		if(null === Session::get('user') ){
			return Redirect::to('/');
		}
		if(Session::get('user')['id_filial'] == 0 ){
			$Atendente = Atendentes::all();	
		}else{
			$Atendente = Atendentes::where("id_filial", "=",  Session::get('user')['id_filial'] )->get();
		}
		$Filial = Filiais::all();
		$a = 0 ;
		$array_filial[0]["nome"] = "Selecione uma filial" ;
		$array_filial[0]["id"] = "" ;
		foreach ($Filial as $user){
			$array_filial[$user->id]["nome"] = $user->nome ;
			$array_filial[$user->id]["id"] = $user->id ;
			$a++;
		}
		if($a == 0 ){
			return View::make('admin-atendente')->with("atendentes", $Atendente)
											->with("filial", 0 );
		}else{
			return View::make('admin-atendente')->with("atendentes", $Atendente)
											->with("filial", $array_filial);
		}
		
	}

	public function atendente_novo(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}
		if(Input::get('filial') != ""){
			$Atendente = new Atendentes();
			$Atendente->nome = Input::get('nome') ;
			$Atendente->usuario = Input::get('usuario') ;
			$Atendente->senha = Input::get('senha') ;
			$Atendente->id_filial = Input::get('filial') ;
			$Atendente->save();
		}
		
		return Redirect::to('/admin/atendente');
	}

	public function atendente_editar(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}
		if(Input::get('filial') != ""){
			$Atendente = new Atendentes();
			$Atendente = Atendentes::find(Input::get('id'));
			$Atendente->nome = Input::get('nome') ;
			$Atendente->usuario = Input::get('usuario') ;
			$Atendente->id_filial = Input::get('filial') ;
			if( Input::get('senha') != "" ){
				$Atendente->senha = Input::get('senha') ;
			}
		}
		$Atendente->save();
		return Redirect::to('/admin/atendente');
	}

	public function atendente_excluir(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Atendente = new Atendentes();
		$Atendente = Atendentes::find(Input::get('id'));
		$Atendente->delete();
		return Redirect::to('/admin/atendente');
	}

	public function guiches(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}
		if(Session::get('user')['id_filial'] == 0 ){
			$Guiches = Guiches::all();
		}else{
			$Guiches = Guiches::where("id_filial", "=",  Session::get('user')['id_filial'] )->get();
		}
		
		$Filial = Filiais::all();
		$a = 0 ;
		$array_filial[0]["nome"] = "Selecione uma filial" ;
		$array_filial[0]["id"] = "" ;
		foreach ($Filial as $user){
			$array_filial[$user->id]["nome"] = $user->nome ;
			$array_filial[$user->id]["id"] = $user->id ;
			$a++;
		}
		if($a == 0 ){
			return View::make('admin-guiches')->with("guiches", $Guiches)
											->with("filial", 0 );
		}else{
			return View::make('admin-guiches')->with("guiches", $Guiches)
											->with("filial", $array_filial);
		}
	}

	public function guiche_novo(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Guiches = new Guiches();
		$Guiches->nome = Input::get('nome') ;
		$Guiches->id_filial = Input::get('filial') ;
		$Guiches->save();
		return Redirect::to('/admin/guiche');
	}

	public function guiche_editar(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Guiche = new Guiches();
		$Guiche = Guiches::find(Input::get('id'));
		$Guiche->nome = Input::get('nome') ;
		$Guiche->id_filial = Input::get('filial') ;
		$Guiche->save();
		return Redirect::to('/admin/guiche');
	}

	public function guiche_excluir(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Guiche = new Guiches();
		$Guiche = Guiches::find(Input::get('id'));
		$Guiche->delete();
		return Redirect::to('/admin/guiche');

	}

	public function categorias(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}
		$Categoria = Categorias::all();
		
		return View::make('admin-categorias')->with("categorias", $Categoria);
	}

	public function categoria_novo(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Categoria = new Categorias();
		$Categoria->nome = Input::get('nome') ;
		
		$Categoria->save();
		return Redirect::to('/admin/categorias');
	}

	public function categoria_editar(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Categoria = new Categorias();
		$Categoria = Categorias::find(Input::get('id'));
		$Categoria->nome = Input::get('nome') ;

		$Categoria->save();
		return Redirect::to('/admin/categorias');
	}

	public function categoria_excluir(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Categoria = new Categorias();
		$Categoria = Categorias::find(Input::get('id'));
		$Categoria->delete();
		return Redirect::to('/admin/categorias');
	}

	public function motivos(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}
		$Motivo = Motivos::all();
		
		return View::make('admin-motivos')->with("motivos", $Motivo);
	}

	public function motivo_novo(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Motivo = new Motivos();
		$Motivo->nome = Input::get('nome') ;
		
		$Motivo->save();
		return Redirect::to('/admin/motivo');
	}

	public function motivo_editar(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Motivo = new Motivos();
		$Motivo = Motivos::find(Input::get('id'));
		$Motivo->nome = Input::get('nome') ;

		$Motivo->save();
		return Redirect::to('/admin/motivo');
	}

	public function motivo_excluir(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Motivo = new Motivos();
		$Motivo = Motivos::find(Input::get('id'));
		$Motivo->delete();
		return Redirect::to('/admin/motivo');
	}

	public function chamados(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}
		
		if(Session::get('user')['id_filial'] == 0 ){
			$Chamado = Chamados::all();
		}else{
			$Chamado = Chamados::where("id_filial", "=",  Session::get('user')['id_filial'] )->get();
		}
		$Status = Status::all();
		$array_status[0]["nome"] = "Selecione uma filial" ;
		$array_status[0]["id"] = "" ;
		foreach ($Status as $user){
			$array_status[$user->id]["nome"] = $user->nome ;
		}
		
		return View::make('admin-chamado')->with("chamados", $Chamado)
										->with("status", $array_status);
	}


	public function chamado_editar(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Chamado = new Chamados();
		$Chamado = Chamados::find(Input::get('id'));
		$Chamado->observacao = Input::get('observacao') ;
		$Chamado->save();
		return Redirect::to('/admin/chamado');
	}


	public function filas(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}
		
		if(Session::get('user')['id_filial'] == 0 ){
			$Chamado = Chamados::where("id_atendente", "=",  null )->orderBy('preferencial', 'desc')->orderBy('id', 'asc')->get();
		}else{
			$Chamado = Chamados::where("id_filial", "=",  Session::get('user')["id_filial"] )->where("id_atendente", "=",  null )->orderBy('preferencial', 'desc')->orderBy('id', 'asc')->get();
		}
		$Status = Status::all();
		$array_status[0]["nome"] = "Selecione uma filial" ;
		$array_status[0]["id"] = "" ;
		foreach ($Status as $user){
			$array_status[$user->id]["nome"] = $user->nome ;
		}
		
		return View::make('admin-fila')->with("chamados", $Chamado)
										->with("status", $array_status);
	}


	public function fila_editar(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Chamado = new Chamados();
		$Chamado = Chamados::find(Input::get('id'));
		$Chamado->preferencial = Input::get('preferencial') ;
		$Chamado->save();
		return Redirect::to('/admin/fila');
	}

	public function filiais(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}
		$Filial = Filiais::all();
		
		return View::make('admin-filial')->with("filiais", $Filial);
	}

	public function filial_novo(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Filial = new Filiais();
		$Filial->nome = Input::get('nome') ;
		$Filial->usuario = Input::get('usuario') ;
		$Filial->senha = Input::get('senha') ;
		
		$Filial->save();
		return Redirect::to('/admin/filiais');
	}

	public function filial_editar(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Filial = new Filiais();
		$Filial = Filiais::find(Input::get('id'));
		$Filial->nome = Input::get('nome') ;
		$Filial->usuario = Input::get('usuario') ;
		$Filial->senha = Input::get('senha') ;
		$Filial->save();
		return Redirect::to('/admin/filiais');
	}

	public function filial_excluir(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Filial = new Filiais();
		$Filial = Filiais::find(Input::get('id'));
		$Filial->delete();
		return Redirect::to('/admin/filiais');
	}

	public function ferramentas(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}
		$Ferramenta = Settings::all();
		
		return View::make('admin-ferramenta')->with("ferramentas", $Ferramenta);
	}

	public function ferramenta_editar(){
		
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		$Ferramenta = new Settings();
		$Ferramenta = Settings::find(Input::get('id'));
		$Ferramenta->valor = Input::get('valor') ;

		$Ferramenta->save();
		return Redirect::to('/admin/ferramentas');
	}


	public function Inicial(){
		if(null === Session::get('user')){
			return Redirect::to('/');
		}

		return View::make('index');
	}

}
