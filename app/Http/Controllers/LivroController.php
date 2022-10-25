<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Livros;
use Illuminate\Http\Request;

class LivroController extends Controller
{

    public function index()
    {
        $livros = Livros::with('categoria')->get();  // Variável com mesmo nome da coleção do foreach da index
        return view('livros.index', compact('livros')); // indica primeiro a pasta em que a view se encontra, pasta:livros
    }

    public function create()
    {
        $categorias = Categoria::get();
        return view('livros.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        Livros::create($request->all());
        return redirect()->route('index.livros');
    }

    public function edit($id)
    {
        $livros = Livros::with('categoria')->find($id);
        $categorias = Categoria::get();
        return view('livros.edit', compact('livros', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $livros = Livros::find($id)->update($request->all());
        return redirect()->route('index.livros');

    }

    public function destroy($id)
    {
        Livros::destroy($id);
    }
}
