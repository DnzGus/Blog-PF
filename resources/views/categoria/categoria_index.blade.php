@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                @if(session('mensagem'))
                    <div class="alert alert-success m-2">
                        {{session('mensagem')}}
                    </div>
                @endif
                @if(session('exclusao'))
                    <div class="alert alert-danger m-2">
                        {{session('exclusao')}}
                    </div>
                @endif
                    <table class="table my-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th class="text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categorias as $value)
                                <tr>
                                    <th scope="row">{{$value->id}}</th>
                                    <td>{{$value->name}}</td>
                                    <td class="d-flex justify-content-around">
                                        <a class="btn btn-primary" href="{{ url('/categoria/'.$value->id)}}" role="button">Vizualizar</a>
                                        <a class="btn btn-warning" href="{{ url('/categoria/'.$value->id.'/edit')}}" role="button">Editar</a>
                                        <form method="POST" action='{{ url('/categoria/' . $value->id)}}'>
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-danger" role="button" value="Excluir" type="submit" ></input>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end m-5">
                        <a class="btn btn-success" href="{{ url('/categoria/create') }}" role="button">Criar</a>
                    </div>
        </div>
    </div>
</div>
@endsection

