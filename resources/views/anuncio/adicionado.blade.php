@extends('layout.template')

@section('conteudo')

<div class="alert alert-success" role="alert">  
	<strong>Sucesso!</strong> O anúncio <strong>{{ old('titulo')}}</strong> foi adicionado.
</div>

@stop