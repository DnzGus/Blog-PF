<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('id','ASC')->get();
        return view('categoria.categoria_index', compact('categorias'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.categoria_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:5',
            ]);

        $categoria = new Categoria();
        $categoria->name = $request->name;
        $categoria->save();
    
        return redirect()->route('categoria.index')->with('mensagem','Categoria criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.categoria_show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.categoria_edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:5',
            ]);

        $categoria = Categoria::find($id);
        $categoria->name = $request->name;
        $categoria->save();
    
        return redirect()->route('categoria.index')->with('mensagem','Categoria alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categoria.index')->with('exclusao','Categoria excluida com sucesso!');
    }

    public function confirm(string $id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.categoria_confirmation', compact('categoria'));
    }
}
