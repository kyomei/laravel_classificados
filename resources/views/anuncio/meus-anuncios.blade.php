@extends('layout.template')

@section('conteudo')


  <!-- Start .\ alert do anúncio excluído ou adicionado com sucesso -->
  @if(Session::has('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {!! Session::get('status') !!}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  <!-- End .\ alert do anúncio excluído ou adicionado com sucesso -->  

  <h1>Meus Anúncios</h1> 

  <!-- Start .\ button add anúncio -->  
  <div class="clearfix mb-3">
    <div class="float-right">
      <a href="{{action('AnuncioController@adicionar')}}" class="btn btn-secondary">Adicionar Anúncio</a>
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
            <td class="align-middle">
              <a href="/anuncio/{{$a->id}}">{{ $a->titulo }}</a> 
              {!! date('Y-m-d', strtotime($a->created_at)) > date('Y-m-d', strtotime('-1 day')) ? '<sup><span class="badge badge-success">Novo</span></sup>':'' !!}
              @if(!empty($a->updated_at))
                {!! date('Y-m-d', strtotime($a->updated_at)) > date('Y-m-d', strtotime('-1 day')) ? '<sup><span class="badge badge-primary">Atualizado</span></sup>':'' !!}
              @endif
            </td>
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

    
  </div>   
  @stop