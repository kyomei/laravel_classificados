<?php namespace classificados\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AnuncioController extends Controller {

	public function lista() {
		$anuncios = DB::select('select * from anuncios');
		print_r($anuncios);
		return '<h1>Listagem de anúncios com Laravel</h1>';
	}
}