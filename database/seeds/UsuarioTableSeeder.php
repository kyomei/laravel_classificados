<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('usuarios')->insert(['nome' => 'Rafael', 'email' => 'rafa.jefer@gmail.com', 'senha' => md5(123)]);
    	DB::table('usuarios')->insert(['nome' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'senha' => md5(123)]);
        //DB::table('usuarios')->insert(['nome' => 'Rafael', 'email' => 'rafa.jefer@gmail.com', 'senha' => bcrypt('secret')] );
    }
}
