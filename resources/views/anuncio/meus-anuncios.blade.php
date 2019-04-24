@extends('layout.template')

@section('conteudo')
  <h1>Meus Anúncios</h1> 

  <!-- Start .\ button add anúncio -->  
  <div class="clearfix mb-3">
    <div class="float-right">
      <a href="anuncios/adicionar" class="btn btn-secondary">Adicionar Anúncio</a>
    </div>
  </div>
  <!-- End .\ button add anúncio -->

  <!-- Start .\ Mensagem nenhum anúncio -->
  @if(empty($anuncios))
  <div class="alert alert-dark" role="alert">
    Você não tem nenhum anúncio cadastrado.
  </div>
  <!-- End .\ Mensagem nenhum anúncio -->

  @else
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-borderless table-hover">
      <caption>Total de anúncios do usuário: {{ count($anuncios) }}</caption>
        <thead class="thead-dark">
          <tr>
            <th scope="col" width="90">Foto</th>
            <th scope="col">Título</th>
            <th scope="col" width="150">Valor</th>
            <th scope="col" width="150">Data</th>
            <th scope="col" width="150">Ações</th>
          </tr>
        </thead>
        <tbody>
          <!-- Start .\ Listagem dos anúncios -->
         	@foreach ($anuncios as $a)
          <tr>
            <th class="align-middle">
              @if(!empty($a->url))
             	  <img src="/images/anuncios/{{$a->url}}" height="50" />
              @else
                <img src="/images/anuncios/default.jpg" height="50" />
              @endif
            </th>
            <td class="align-middle">{{ $a->titulo }} <?= date('Y-m-d', strtotime($a->created_at)) > date('Y-m-d', strtotime('-1 day')) ? '<sup><span class="badge badge-success">Novo</span></sup>':'' ?></td>
            <td class="align-middle">R$ {{ number_format($a->valor, 2, ",", ".") }}</td>
            <td class="align-middle">{{ date('d-m-Y', strtotime($a->created_at))}}</td>
            <td class="align-middle">
              <a href="/anuncios/editar/{{$a->id}}" class="btn btn-sm btn-info">Editar</a>
              <a href="/anuncios/excluir/{{$a->id}}" class="btn btn-sm btn-danger">Excluir</a>
            </td>
     	    </tr>
       		@endforeach
          <!-- End .\ Listagem dos anúncios -->
    	  </tbody>
   	</table>
    @endif
    
    <!-- Start .\ alert do anúncio add com sucesso -->
    @if(old('nome'))
    <div class="alert alert-success" role="alert">  
      <strong>Sucesso!</strong> O anúncio {{ old('titulo') }} foi adicionado.
    </div>
    @endif
    <!-- End .\ alert do anúncio add com sucesso -->

  </div>   
  @stop