<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Classificados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
  
<div class="container">
  <h1>Meus Anúncios</h1>   
  <div class="clearfix">
    <div class="float-right">
      <a href="#" class="btn btn-secondary">Adicionar Anúncio</a>
    </div>
  </div>
  <div class="table-responsive mt-3">
        	<table class="table table-striped table-bordered table-borderless table-hover">
        	  <caption>Total de anúncios do usuário: <?= count($anuncios); ?></caption>
        	  <thead class="thead-dark">
        	    <tr>
        	      <th scope="col">Foto</th>
        	      <th scope="col">Título</th>
        	      <th scope="col">Valor</th>
        	      <th scope="col">Ações</th>
        	    </tr>
        	  </thead>
        	  <tbody>
        	  	<?php foreach ($anuncios as $a): ?>
        	    <tr>
        	      <th class="align-middle">
                  <?php if(!empty($a->url)): ?>
        	      	  <img src="/images/anuncios/9d005c0336e43ec641bf16f0ffa72a35.jpg" height="50" />
                  <?php else: ?>
                    <img src="/images/anuncios/default.jpg" height="50" />
                  <?php endif; ?>
        	      </th>
        	      <td class="align-middle"><?= $a->titulo; ?></td>
        	      <td class="align-middle">R$ <?= number_format($a->valor, 2, ",", ".") ; ?></td>
        	      <td class="align-middle">
                  <a href="/anuncios/editar/<?= $a->id; ?>" class="btn btn-sm btn-info">Editar</a>
                  <a href="/anuncios/excluir/<?= $a->id; ?>" class="btn btn-sm btn-danger">Excluir</a>
                </td>
        	    </tr>
        		<?php endforeach; ?>
        	  </tbody>
        	</table>
        </div>      
</div>

  <!-- scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>