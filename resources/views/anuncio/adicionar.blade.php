@extends('layout.template')

@section('conteudo')
<h1>Adiciona Anúncios</h1>  
<hr /> 
<!-- Start .\ - Display errors validação -->
@if (count($errors) > 0)
	<div class="alert alert-danger">
		<ul> 
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
@endif
<!-- End .\ - Display errors validação -->

<div class="row justify-content-md-center">
	<div class="col-md-8">
		<form action="/anuncios/adiciona" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
			<div class="row mb-3">
				<div class="col-md-4">
					<div class="form-group">
					    <label for="categoria">Categoria:</label>
					    <select name="categoria" class="form-control">
					    	<option value="1">Relógios</option>
					    	<option value="2">Roupas</option>
					    	<option value="3">Eletrônicos</option>
					    	<option value="4">Carros</option>
					    </select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="titulo">Título:</label>
					    <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo') }}">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <label for="valor">Valor:</label>
					    <input type="text" class="form-control" name="valor" id="valor" value="{{ old('valor') }}">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
					    <label for="estado">Estado de Conservação:</label>
					    <select name="estado" class="form-control">
							   <option>Ruim</option>
							   <option>Bom</option>
							   <option>Ótimo</option>
						</select>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
					    <label for="descricao">Descrição:</label>
					    <textarea class="form-control" name="descricao" rows="5">{{ old('descricao') }}</textarea>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
					    <label for="fotos_input">Fotos do anúncio:</label>
					    <input type="file" class="form-control-file border" name="fotos[]" multiple="multiple">
					</div>
				</div>
				<div class="col-md-12 text-right">
					<button type="submit" class="btn btn-dark">Salvar</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop