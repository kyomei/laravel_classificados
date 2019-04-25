@extends('layout.template')

@section('conteudo')
<h1>Editar Anúncios</h1>  
<hr /> 
<div class="row justify-content-md-center">
	<div class="col-md-10">
		<form action="/anuncios/edita/{{$anuncio->id}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
			<div class="row mb-3">
				<div class="col-md-4">
					<div class="form-group">
					    <label for="categoria">Categoria:</label>
					    <select name="categoria" class="form-control">
					    	@foreach ($categorias as $cat)
			    				<option value="{{$cat->id}}" {{ ($cat->id == $anuncio->id_categoria) ? 'selected' : '' }}>{{ $cat->nome }}</option>
			    			@endforeach
					    </select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					    <label for="titulo">Título:</label>
					    <input type="text" class="form-control" name="titulo" id="titulo" value="{{$anuncio->titulo}}">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <label for="valor">Valor:</label>
					    <input type="text" class="form-control" name="valor" id="valor" value="{{ number_format($anuncio->valor, 2, ',', '.') }}">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
					    <label for="estado">Estado de Conservação:</label>
					    <select name="estado" class="form-control">
							   <option {{ $anuncio->estado == 'Ruim' ? 'selected' : ''}}>Ruim</option>
							   <option {{ $anuncio->estado == 'Bom' ? 'selected' : ''}}>Bom</option>
							   <option {{ $anuncio->estado == 'Ótimo' ? 'selected' : ''}}>Ótimo</option>
						</select>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
					    <label for="descricao">Descrição:</label>
					    <textarea class="form-control" name="descricao" rows="5">{{$anuncio->descricao}}</textarea>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
					    <label for="fotos_input">Fotos do anúncio:</label>
					    <input type="file" class="form-control-file border" name="fotos[]" multiple="multiple">
					</div>
				</div>
				<div class="col-md-12">
				    <div class="card">
				  		<div class="card-header">Fotos do Anúncio</div>
				  		<div class="card-body">
				  			<div class="d-flex flex-wrap bg-light">
				  			<?php foreach ($fotos as $foto): ?>
				  					<div class="p-2 border text-center">
				  						<img src="/images/anuncios/<?php echo $foto->filename; ?>" class="img-thumbnail" width="100"><br />
				  						<a href="anuncios/excluirfoto/<?php echo $foto->id; ?>" class="btn btn-danger btn-sm mt-1">Excluir</a>
				  					</div>
				  			<?php endforeach; ?>
				  			</div>
				  		</div> 
					</div><br />
				</div>				
				<div class="col-md-12 text-right">
					<button type="submit" class="btn btn-dark">Salvar</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop