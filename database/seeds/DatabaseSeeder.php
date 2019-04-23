<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    // Este é o método executado quando executamos -> php artisan db:seed
    public function run()
    {
    	// Este comando "desabilita" a proteção do método fill($data = []); nos models
    	Model::unguard();
    	$this->call('UsuarioTableSeeder');
    	$this->call('CategoriaTableSeeder');
        // $this->call(UsersTableSeeder::class);
    }
}