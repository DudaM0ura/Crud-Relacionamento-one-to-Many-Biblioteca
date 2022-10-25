@extends('layout.default')
@section('content')
<h2>Minha Bibliotca</h2>
<input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
<table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Livro</th>
          <th scope="col">Autor</th>
          <th scope="col">Categoria</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($livros as $livro)
            <tr id="tr-livros-{{$livro->id}}">
                <th>{{$livro->id}}</th>
                <td>{{$livro->titulo}}</td>
                <td>{{$livro->autor}}</td>
                <td>{{$livro->categoria->nome}}</td>
                <td>
                    <a href="{{route('edit.livros', $livro->id)}}" class="btn btn-outline-secondary">Editar</a>
                    <a onclick="DeletarLivro({{$livro->id}})" class="btn btn-outline-danger">Deletar</a>
                </td>
            </tr>
        @endforeach
      </tbody>
</table>
@endsection