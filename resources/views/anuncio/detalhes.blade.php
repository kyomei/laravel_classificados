
@extends('layout.template')

@section('conteudo')
<div class="container mt-5">
	<div class="row">
		<div class="col-sm-5">
			
			<div id="demo" class="carousel slide" data-ride="carousel">

			  <!-- Indicators -->
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  
			  <!-- The slideshow -->
			  <div class="carousel-inner">
			  	<?php foreach($imagens as $key => $imagem): ?>
			    <div class="carousel-item <?php echo ($key==0) ? 'active' : ''; ?>">
			      <img src="<?php echo BASE_URL."assets/images/anuncios/".$imagem['filename']; ?>" alt="Los Angeles" height="500" class="img-fluid">
			    </div>
				<?php endforeach; ?>
			  </div>
			  
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
		</div>
		<div class="col-sm-7">
			<h1>{{ $anuncio->titulo }}</h1>
			<h4>Categoria: {{ $anuncio->id_categoria }}</h4>
			<p>Descrição do produto: {{ $anuncio->descricao }}</p><br />
			<h3>Valor: R$ {{ number_format($anuncio->valor, 2, ",", ".") }}</h3><hr />
			<h4>Informações do vendedor</h4><br />
			<p><strong>Nome:</strong> {{ $anuncio->id_usuario }} <br />
			<strong>Telefone:</strong> 33132123121</h4>
		</div>
	</div>
</div>
@stop