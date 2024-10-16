<?php

namespace App\Http\Controllers;

use App\Models\Postagem;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Http\Request;


class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::orderBy('id','DESC')->get();
        return view('welcome', compact('postagens'));
    }

    public function categoria()
    {
        $categorias = Categoria::orderBy('name', 'ASC')->get();
        return view('feed.categoria', compact('categorias'));
    }

    public function categoriaById(string $id)
    {
        $postagens = Postagem::where('categoria_id', $id)->orderBy('id', 'DESC')->get();
        return view('feed.categoriaById', compact('postagens'));
    }

    public function autor()
    {
        $autores = User::orderBy('name', 'ASC')->get();
        return view('feed.autor', compact('autores'));
    }

    public function autorById(string $id)
    {
        $postagens = Postagem::where('user_id', $id)->orderBy('id', 'DESC')->get();
        return view('feed.autorById', compact('postagens'));
    }
}
