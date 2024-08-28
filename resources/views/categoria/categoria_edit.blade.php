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
            <form method="POST" action="{{ url('/categoria/'.$categoria->id)}}">
              @method('PUT')
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value={{ $categoria->nome }}>
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection

