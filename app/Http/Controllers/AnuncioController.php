<?php namespace classificados\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class AnuncioController extends Controller {

	public function lista() {
		$data = DB::select('select * from anuncios');
		return view('anuncio.meus-anuncios')->with('anuncios', $data);
	}

	public function adicionar() {
		return view('anuncio.adicionar');
	}

	public function editar($id) {
		//$id = 1;
		//$id = Request::route('id');
		$data = DB::select('select * from anuncios where id = ?', [$id]);

		if(empty($data)) {
			return "Esse anuncio não existe";
		}
		return view('anuncios-editar')->with('anuncio', $data[0]);
	}

	public function excluir() {

	}
}