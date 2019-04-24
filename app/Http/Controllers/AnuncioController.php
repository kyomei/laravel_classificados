<?php namespace classificados\Http\Controllers;

use Illuminate\Support\Facades\DB;
use classificados\Anuncio;
use Request;

class AnuncioController extends Controller {


	// Método - Listagem de todos os anúncios
	public function lista() {
		//$data = DB::select('select * from anuncios');

		$data = DB::select('SELECT *, 
		(SELECT anuncios_imagens.url FROM anuncios_imagens WHERE anuncios_imagens.id_anuncio = anuncios.id LIMIT 1) as url 
		FROM anuncios 
		WHERE id_usuario = 1 ORDER BY anuncios.created_at DESC');
		return view('anuncio.meus-anuncios')->with('anuncios', $data);
	}

	// Método - Listagem de todos os anúncios
	public function lista2() {
		$data = Anuncio::all();
		return view('anuncio.meus-anuncios')->with('anuncios', $data);
	}

	// Método - Mostrar detalhes do anúncio via $id
	public function mostra($id) {
		$data['anuncio'] = Anuncio::find($id);
		$data['imagens'] = array();
		if(empty($data)) {
			return "Esse produto não existe";
		}

		return view('anuncio.detalhes', $data);
	}

	// Método - Exibir view adicionar novo anúncio
	public function adicionar() {
		return view('anuncio.adicionar');
	}

	// Método - Salvar informações do novo anúncio no banco
	public function adiciona() {

		$anuncio = new Anuncio();
		$anuncio->id_usuario = 1;
		$anuncio->id_categoria = Request::input('categoria');
		$anuncio->titulo = Request::input('titulo');
		$anuncio->valor = Request::input('valor');
		$anuncio->estado = Request::input('estado');
		$anuncio->descricao = Request::input('descricao');

		$anuncio->save();
		//$fotos = Request::input('fotos');

		//DB::insert('INSERT INTO anuncios (id_usuario, id_categoria, titulo, valor, estado, descricao) VALUES (1, ?,?,?,?,?)', array($categoria, $titulo, $valor, $estado, $descricao));

		
		// Redireciona para url anuncios e manter valor do $titulo na página /anuncios 
		//return redirect('/anuncios')->withInput(Request::only('titulo'));

		// Redirenciona para um action
		return redirect()->action('AnuncioController@lista')->withInput(Request::only('titulo'));
		
	}

	// Método - Exibir view editar anúncio pelo $id
	public function editar($id) {
		//$id = 1;
		//$id = Request::route('id');
		//$anuncio = DB::select('select * from anuncios where id = ?', [$id]);
		$anuncio = DB::select('SELECT *,
		(SELECT categorias.nome FROM categorias WHERE categorias.id = anuncios.id_categoria) as categoria,
		(SELECT usuarios.telefone FROM usuarios WHERE usuarios.id = anuncios.id_usuario) as telefone

		 FROM anuncios WHERE id = ?', [$id]);
		$fotos = DB::select('SELECT id, url as filename FROM anuncios_imagens WHERE id_anuncio = ?', [$id]);
		$categorias = DB::select('select * from categorias');

		$data['anuncio'] = $anuncio[0];
		$data['categorias'] = $categorias;
		$data['fotos'] = $fotos;
		return view('anuncio.editar', $data);
	}

	public function excluir() {

	}

	public function listaJson() {
		$anuncios = Anuncio::all();
		//return $anuncios;
		
		return response()->json($anuncios);
	}

}