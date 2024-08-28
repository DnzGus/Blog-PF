@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a class="btn btn-success" href="{{ url('/categoria/create') }}" role="button">Criar</a>
                @if(session('mensagem'))
                    <div class="alert alert-success">
                        {{session('mensagem')}}
                    </div>
                @endif
                <table>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                    </tr>
                    @foreach($categorias as $value)
                    <tr>
                        <td>
                        {{$value->id}}
                        </td>
                        <td>
                        {{$value->name}}
                        </td>
                        <td>
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
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

