@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}">
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src="{{ url('/richtexteditor/plugins/all_plugins.js') }}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if ($errors->any())
            <div class="alert alert-danger my-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
            <div class="text-left my-3">
              <form action="{{ url('/postagem')}}">
                  <input class="btn btn-secondary" role="button" value="Retornar" type="submit" ></input>
              </form>
            </div>
            <form class="my-3" method="POST" action="{{ url('/postagem/'.$postagem->id)}}" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="text-right">
                <button type="submit" class="btn btn-success">Finalizar</button>
              </div>
              <div class="mb-3">
                <label for="categoria_id">Escolha a categoria:</label>
                  <select name="categoria_id" class="form-control" id="">
                    @foreach($categorias as $value)
                    @if($value->id == $postagem->categoria_id)
                    <option selected='selected' value="{{$value->id}}">{{$value->name}}</option>
                    @else
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endif
                    @endforeach
                  </select>
                <label for="Imagem" class="form-label">Insira a Imagem:</label>
                <input type="file" name="imagem">
                <label for="titulo" class="form-label">Digite o titulo:</label>
                <input placeholder="{{$postagem->titulo}}" type="text" class="form-control" id="exampleInputEmail1" name="titulo">
                <label for="conteudo">Digite o conteúdo</label>
                <textarea name="conteudo" class="form-control" id="inp_editor1" rows="3">{{$postagem->conteudo}}</textarea>
              </div>
            </form>
            <script>
                var editor1 = new RichTextEditor("#inp_editor1");
            </script>
        </div>
    </div>
</div>
@endsection

