<?php namespace classificados\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class AnuncioController extends Controller {

	public function lista() {
		//$data = DB::select('select * from anuncios');

		$data = DB::select('SELECT *, 
		(SELECT anuncios_imagens.url FROM anuncios_imagens WHERE anuncios_imagens.id_anuncio = anuncios.id LIMIT 1) as url 
		FROM anuncios 
		WHERE id_usuario = 1 ORDER BY anuncios.titulo ASC');
		return view('anuncio.meus-anuncios')->with('anuncios', $data);
	}

	public function adicionar() {
		return view('anuncio.adicionar');
	}

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
}