<?php

use classificados\Categoria;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder {

	public function run()
	{
		DB::insert('INSERT INTO categorias (nome) VALUES (?)', array('Relógios'));
		DB::insert('INSERT INTO categorias (nome) VALUES (?)', array('Roupas'));
	}
}