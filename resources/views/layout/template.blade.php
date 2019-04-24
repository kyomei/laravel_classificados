<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Classificados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/custom.css">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <a class="navbar-brand" href="/">Classificados</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      	<span class="navbar-text">Olá, Rafael Jeferson</span>
        <li class="nav-item active">
          <a class="nav-link" href="/anuncios">Meus Anúncios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout">Sair</a>
        </li>
        <li class="nav-item dropdown d-none">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
	<div class="container">
	  @yield('conteudo')      
	</div>
	<!-- FOOTER -->
    <footer class="bg-light py-5">
    	<div class="container">
	    	<p class="float-right"><a href="#">Back to top</a></p>
	        <p>&copy; 2019 <a href="mailto:rafa.jefer@gmail.com">Rafael Jeferson</a>, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    	</div>
    </footer>

  <!-- scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>