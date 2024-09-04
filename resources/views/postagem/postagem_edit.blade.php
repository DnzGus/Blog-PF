@extends('adminlte::page')

@section('content')
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
              <form action='{{ url('/postagem')}}'>
                  <input class="btn btn-secondary" role="button" value="Retornar" type="submit" ></input>
              </form>
            </div>
            <form class="my-3" method="POST" action="{{ url('/postagem/'.$postagem->id)}}">
              @method('PUT')
              @csrf
              <div class="mb-3">
                <label for="exampleFormControlSelect1">Example select</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                <label for="titulo" class="form-label">Digite o titulo:</label>
                <input placeholder="Categoria" type="text" class="form-control" id="exampleInputEmail1" name="titulo">
                <label for="exampleFormControlTextarea1">Digite o conteúdo</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-success">Finalizar</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection

