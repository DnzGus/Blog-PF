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
                            <th>Categoria</th>
                            <th>Título</th>
                            <th class="text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($postagens as $value)
                        <tr>
                            <th scope="row">{{$value->categoria->name}}</th>
                            <td>{{$value->titulo}}</td>
                            <td class="d-flex justify-content-around">
                                <a class="btn btn-primary" href="{{ url('/postagem/'.$value->id)}}" role="button">Visualizar</a>
                                <a class="btn btn-warning" href="{{ url('/postagem/'.$value->id.'/edit')}}" role="button">Editar</a>
                                <form method="POST" action='{{ url('/postagem/' . $value->id)}}' onsubmit="return ConfirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" role="button" value="Excluir" type="submit" ></input>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end m-5">
                    <a class="btn btn-success" href="{{ url('/postagem/create') }}" role="button">Criar</a>
                </div>
        </div>
    </div>
</div>
    <script>
        const ConfirmDelete = () => {
            return confirm('Deseja excluir este registro?');
        }
    </script>
@endsection

