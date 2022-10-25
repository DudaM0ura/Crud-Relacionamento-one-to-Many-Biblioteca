@extends('layout.default')
@section('content')
<h2>Cadastrar Livro</h2>
<form action="{{route('store.livros')}}" method="post">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control mb-3" name="titulo" placeholder="Título">
        <label for="floatingInput">Título do Livro: </label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control mb-3" name="autor" placeholder="Autor">
        <label for="floatingInput">Autor: </label>
    </div>
    <select class="form-control" name="id_categoria" id="">
        <option value="" disabled selected>Selecione uma categoria</option>
        @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-outline-primary mt-3">Cadastrar</button>
</form>
@endsection