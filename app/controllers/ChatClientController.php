<?php

class ChatClientController extends BaseController {

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

	public function novochamado(){
		$Chamado = new Chamados();
		$Chamado->nome = Input::get('nome');
		$Chamado->email = Input::get('email');
		$Chamado->telefone = Input::get('telefone');
		$Chamado->id_status = 1 ;
		$Chamado->id_filial = Session::get('token')["id"] ; 
		$Chamado->save();
		$Ferramenta = new Settings();
		$Ferramenta = Settings::where("nome", "like", "tempo_atualizacao_cliente" )->first();
		$Tempo = $Ferramenta->valor  ;
		$Tempo *= 1000 ; 
		return View::make('client-logout')->with("chamado", $Chamado->id)
											->with("tempo", $Tempo);
	}

	public function contatos_editar(){
		$Contato = new Contatos();
		$Contato = Contatos::find(Input::get('id'));

		if(Input::get('deleta') == 1){
			$Contato->delete();
		}else{
			
			$Contato->observacao = Input::get('observacao') ;
			$Contato->save();
		}
		
		$Contatos = Contatos::where("id_usuario", "=", 1)->get();
		return View::make('contatos')->with("contatos", $Contatos);
	}

	public function categoria_cadastro(){
		return View::make('admincategoriacadastro');
	}

	public function categoria_inserir(){
		$Categoria = new Categorias();
		$Categoria->nome = Input::get('nome') ;
		$Categoria->save();
		return View::make('admincategoriacadastro');
	}	


	public function categorias(){
		$Categorias = Categorias::all();
		return View::make('categoria_admin')
				->with("categorias", $Categorias);
	}

	public function categorias_editar(){
		$Categoria = new Categorias();
		$Categoria = Categorias::find(Input::get('id'));

		if(Input::get('deleta') == 1){
			$Categoria->delete();
		}else{
			$Categoria->nome = Input::get('nome') ;
			$Categoria->save();
		}

		$Categorias = Categorias::all();
		return View::make('categoria_admin')
				->with("categorias", $Categorias);
	}

	public function video_cadastro(){
		$Categorias = Categorias::all();
		return View::make('adminvideocadastro')->with("categorias", $Categorias);
	}

	public function video_inserir(){
		$Video = new Videos();
		$Video->id_categoria = Input::get('categoria') ;
		$link =  Input::get('url') ;

		$link = explode("watch?" , $link );

		$pos = strripos("&", $link[1]);

		if ($pos === true) {
			$Video->url = str_replace("v=", "", $link[1]);
		} else {
			$linkajuste = explode("&" , $link[1] );
			$Video->url = str_replace("v=", "", $linkajuste[0]);
		}
		$Video->nome = Input::get('titulo') ;
		
		$Video->descricao = Input::get('descricao') ;
		$Video->save();
		$Categorias = Categorias::all();
		return View::make('adminvideocadastro')->with("categorias", $Categorias);
	}

	public function videos(){
		$Categorias = Categorias::all();
		$Videos = Videos::all();
		return View::make('videos_admin')
				->with("categorias", $Categorias)
				->with("videos", $Videos);
	}

	public function videos_editar(){
		$Video = new Videos();
		$Video = Videos::find(Input::get('id'));

		if(Input::get('deleta') == 1){
			$Video->delete();
		}else{
			$Video->id_categoria = Input::get('categoria') ;
			$link =  Input::get('url') ;

			$link = explode("watch?" , $link );

			$pos      = strripos("&", $link[1]);

			if ($pos === true) {
				$Video->url = str_replace("v=", "", $link[1]);
			} else {
				$linkajuste = explode("&" , $link[1] );
				$Video->url = str_replace("v=", "", $linkajuste[0]);
			}
			$Video->nome = Input::get('titulo') ;
			$Video->descricao = Input::get('descricao') ;
			$Video->save();
		}

		$Categorias = Categorias::all();
		$Videos = Videos::all();
		return View::make('videos_admin')
				->with("categorias", $Categorias)
				->with("videos", $Videos);
	}

	public function assunto_cadastro(){
		return View::make('adminassuntocadastro');
	}

	public function assunto_inserir(){
		$Assunto = new Assuntos();
		$Assunto->nome = Input::get('nome') ;
		$Assunto->save();
		return View::make('adminassuntocadastro');
	}

	public function assuntos(){
		$Categorias = Assuntos::all();
		return View::make('assunto_admin')
				->with("categorias", $Categorias);
	}

	public function assunto_editar(){
		$Assunto = new Assuntos();
		$Assunto = Assuntos::find(Input::get('id'));

		if(Input::get('deleta') == 1){
			$Assunto->delete();
		}else{
			$Assunto->nome = Input::get('nome') ;
			$Assunto->save();
		}

		$Categorias = Assuntos::all();
		return View::make('assunto_admin')
				->with("categorias", $Categorias);
	}

	public function tipo_inserir(){
		$Tipo = new Tipos();
		$Tipo->nome = Input::get('nome') ;
		$Tipo->save();
		return View::make('admintipocadastro');
	}	

	public function tipo_cadastro(){
		return View::make('admintipocadastro');
	}

	public function tipos(){
		$Categorias = Tipos::all();
		return View::make('tipo_admin')
				->with("categorias", $Categorias);
	}

	public function tipos_editar(){
		$Tipo = new Tipos();
		$Tipo = Tipos::find(Input::get('id'));

		if(Input::get('deleta') == 1){
			$Tipo->delete();
		}else{
			$Tipo->nome = Input::get('nome') ;
			$Tipo->save();
		}

		$Categorias = Tipos::all();
		return View::make('tipo_admin')
				->with("categorias", $Categorias);
	}

	public function noticia_cadastro(){
		$Categorias = Assuntos::all();
		return View::make('adminnoticiacadastro')
		->with("categorias", $Categorias);
	}

	public function noticia_inserir(){
		$Noticia = new Noticias();
		$Noticia->id_assunto = Input::get('assunto') ;
		$Noticia->titulo = Input::get('titulo') ;
		$Noticia->referencia = Input::get('referencia') ;
		$Noticia->descricao = Input::get('texto') ;
		$Noticia->completa = Input::get('texto2') ;
		$Noticia->save();
		$Categorias = Assuntos::all();
		return View::make('adminnoticiacadastro')
		->with("categorias", $Categorias);
	}	

	public function noticia_atualiza(){
		$Noticia = new Noticias();
		$Noticia = Noticias::find(Input::get('id'));
		$Noticia->id_assunto = Input::get('assunto') ;
		$Noticia->titulo = Input::get('titulo') ;
		$Noticia->referencia = Input::get('referencia') ;
		$Noticia->descricao = Input::get('texto') ;
		$Noticia->completa = Input::get('texto2') ;
		$Noticia->save();
		$Noticias = Noticias::all();
		return View::make('noticia_admin')
				->with("categorias", $Noticias);
	}

	public function noticias(){
		$Noticias = Noticias::all();
		return View::make('noticia_admin')
				->with("categorias", $Noticias);
		
	}

	public function noticia_editar(){
		$Noticia = new Noticias();
		$Noticia = Noticias::find(Input::get('id'));

		if(Input::get('deleta') == 1){
			$Noticia->delete();
			$Noticias = Noticias::all();
			return View::make('noticia_admin')
				->with("categorias", $Noticias);
		}else{
			$Categorias = Assuntos::all();
			return View::make('noticia_admin_edita')
				->with("noticia", $Noticia)
				->with("categorias", $Categorias);
		}
	}

	public function arquivo_cadastro(){
		$Categorias = Tipos::all();
		return View::make('adminarquivocadastro')
		->with("categorias", $Categorias);
	}

	public function arquivo_inserir(){
		
		$extensao =  Input::file('arquivo')->getClientOriginalExtension()  ; 

		$Arquivo = new Arquivos();
		$Arquivo->id_tipo = Input::get('categoria') ;
		$Arquivo->nome = Input::get('nome') ;
		$Arquivo->descricao = Input::get('descricao') ;
		$Arquivo->save();
		$fileName = "arquivo".$Arquivo->id.".".$extensao ;
		$destinationPath = "\upload\arquivo\\" ;
		$teste = Input::file('arquivo')->move("public".$destinationPath, $fileName);
		$Arquivo->local = $destinationPath.$fileName ;
		$Arquivo->save();
		$Categorias = Tipos::all();
		return View::make('adminarquivocadastro')
		->with("categorias", $Categorias);
	}	

	public function arquivos_upload(){
		$extensao =  Input::file('arquivo')->getClientOriginalExtension()  ; 
		$Arquivo = new Arquivos();
		$Arquivo = Arquivos::find(Input::get('id'));
		$fileName = "arquivo".$Arquivo->id.".".$extensao ;
		$destinationPath = "\upload\arquivo\\" ;
		$teste = Input::file('arquivo')->move("public".$destinationPath, $fileName);
		$Arquivo->local = $destinationPath.$fileName ;
		$Arquivo->save();
		$Categorias = Arquivos::all();
		$Tipos = Tipos::all();
		return View::make('arquivo_admin')
				->with("categorias", $Categorias)
				->with("tipos", $Tipos);
	}	

	public function arquivos(){
		$Categorias = Arquivos::all();
		$Tipos = Tipos::all();
		return View::make('arquivo_admin')
				->with("categorias", $Categorias)
				->with("tipos", $Tipos);
	}

	public function arquivos_editar(){
		$Arquivo = new Arquivos();
		$Arquivo = Arquivos::find(Input::get('id'));

		if(Input::get('deleta') == 1){
			$Arquivo->delete();
		}else{
			$Arquivo->id_tipo = Input::get('categoria') ;
			$Arquivo->nome = Input::get('nome') ;
			$Arquivo->descricao = Input::get('descricao') ;
			$Arquivo->save();
		}

		$Categorias = Arquivos::all();
		$Tipos = Tipos::all();
		return View::make('arquivo_admin')
				->with("categorias", $Categorias)
				->with("tipos", $Tipos);

	}

	public function urls($pagina){
		$Url = new Urls();
		$Url = Urls::where("id_perfil", "=", $pagina )->first();
		return View::make('urls')->with("url", $Url);
	}

	public function urls_gravar(){
		$Url = new Urls();
		$Url = Urls::find(Input::get('id'));
		$Url->tag_ga = Input::get('tag_ga') ;
		$Url->pixel_face = Input::get('pixel_face') ;
		$Url->save();
		return View::make('urls')->with("url", $Url);
	}	

	

	public function videosview($video){
		$Video = Videos::find($video);
		$Videosr = Videos::where("id_categoria", "=", $Video->id_categoria)->get();
		return View::make('videos-view')
				->with("video", $Video)
				->with("videor", $Videosr);
	}

	public function videospesquisa(){
		$Categorias = Categorias::all();
		$Videos = Videos::all();
		$Videos = Videos::where("nome", "like", "%".Input::get('nome')."%" )->get();
		return View::make('videos')
				->with("categorias", $Categorias)
				->with("videos", $Videos);
	}

	public function arquivo(){
		$Tipos = Tipos::all();
		$Arquivos = Arquivos::all();
		return View::make('arquivos')
				->with("tipos", $Tipos)
				->with("arquivos", $Arquivos);
	}


	public function Inicial(){
		return View::make('layout.admin');
	}

}
