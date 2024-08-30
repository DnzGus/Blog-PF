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
              <form action='{{ url('/categoria')}}'>
                  <input class="btn btn-secondary" role="button" value="Retornar" type="submit" ></input>
              </form>
            </div>
            <form class="my-3" method="POST" action="{{ url('/categoria/'.$categoria->id)}}">
              @method('PUT')
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Digite um novo nome para a categoria <span class="text-success">{{$categoria->name}}</span>:</label>
                <input placeholder="{{$categoria->name}}" type="text" class="form-control" id="exampleInputEmail1" name="name" value={{ $categoria->nome }}>
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-success">Finalizar</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection

