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
              <div class="mb-3">
                <label for="">Example select</label>
                  <select class="form-control" id="">
                    @foreach($categorias as $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                  </select>
                <label for="titulo" class="form-label">Digite o titulo:</label>
                <input placeholder="Categoria" type="text" class="form-control" id="exampleInputEmail1" name="titulo">
                <label for="exampleFormControlTextarea1">Digite o conteúdo</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-success">Criar</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection

