@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="fs-2 text-center my-5">Deseja mesmo excluir a categoria <span class="text-danger">{{$categoria->name}}</span>?</h1>
            <div class="text-center my-5">
            <form method="POST" action='{{ url('/categoria/' . $categoria->id)}}'>
                @method('DELETE')
                    @csrf
                    <input class="btn btn-danger" role="button" value="Excluir" type="submit"></input>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

