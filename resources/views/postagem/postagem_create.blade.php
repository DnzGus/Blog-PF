@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="text-left my-3">
              <form action='{{ url('/postagem')}}'>
                <input class="btn btn-secondary" role="button" value="Retornar" type="submit" ></input>
              </form>
            </div>
          <form class="my-3" method="POST" action="{{ url('/postagem')}}">
            @csrf
              <div class="text-right">
                <button type="submit" class="btn btn-success">Criar</button>
              </div>
              <div class="mb-3">
                <label for="categoria_id">Escolha a categoria:</label>
                  <select name="categoria_id" class="form-control" id="">
                    @foreach($categorias as $value) 
                    <option value="{{$value->id}}"> {{$value->name}} </option>
                    @endforeach
                  </select>
                <label for="titulo" class="form-label">Digite o titulo:</label>
                <input placeholder="Titulo" type="text" class="form-control" id="exampleInputEmail1" name="titulo">
                <label for="conteudo">Digite o conteúdo</label>
                <textarea name="conteudo" class="form-control" id="conteudo" rows="3"></textarea>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection

