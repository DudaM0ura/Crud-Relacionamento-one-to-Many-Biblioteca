@extends('layout.default')
@section('content')
<h2>Editar livro</h2>
<form action="{{route('update.livros', $livros->id)}}" method="post">
    @csrf
    @method('put')
    <div class="form-floating mb-3">
        <input type="text" class="form-control mb-3" name="titulo" placeholder="Título" value="{{$livros->titulo}}">
        <label for="floatingInput">Título do Livro: </label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control mb-3" name="autor" placeholder="Autor" value="{{$livros->autor}}">
        <label for="floatingInput">Autor: </label>
    </div>
    <select class="form-control" name="id_categoria" id="">

        <option value="{{$livros->id_categoria}}">{{$livros->categoria->nome}}</option> <!--Apenas listar o selecionado-->
        @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nome}}</option> 
        @endforeach

    </select>
    <button type="submit" class="btn btn-outline-primary mt-3">Salvar</button>
</form>
    
@endsection