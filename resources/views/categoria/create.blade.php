@extends('layout.default')
@section('content')
    
<h2>Cadastrar Categoria</h2>
<form action="{{route('store.categoria')}}" method="post">
    <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="nome" placeholder="name@example.com">
        <label for="floatingInput">Categoria: </label>
        <button type="submit" class="btn btn-outline-primary mt-3">Cadastrar</button>
    </div>
</form>

<hr>

<h3>Categorias cadastradas: </h3>
<table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">#Id</th>
          <th scope="col">Nome</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categorias as $categoria)
        <tr id="tr-categoria-{{$categoria->id}}">
            <th scope="row">{{$categoria->id}}</th>
            <td>{{$categoria->nome}}</td>
            <td>
                <a onclick="DeletarCategoria({{$categoria->id}})" class="btn btn-outline-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
      </tbody>
</table>

@endsection