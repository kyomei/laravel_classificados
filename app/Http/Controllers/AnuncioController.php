<?php namespace classificados\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AnuncioController extends Controller {

	public function lista() {
		$data = DB::select('select * from anuncios');
		return view('meus-anuncios')->with('anuncios', $data);
	}

	public function editar() {

	}

	public function excluir() {
		
	}
}