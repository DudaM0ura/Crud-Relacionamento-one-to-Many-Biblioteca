<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function create()
    {
        $categorias = Categoria::get();  // Variável com mesmo nome da coleção do foreach da index
        return view ('categoria.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        Categoria::create($request->all());
        return redirect()->route('index.livros');
    }

    public function destroy($id)
    {
        Categoria::destroy($id);
    }
}
