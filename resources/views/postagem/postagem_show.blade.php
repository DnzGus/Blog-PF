@extends('adminlte::page')
<script>
    const ConfirmDelete = () => {
        return confirm('Deseja excluir este registro?');
    }
</script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex text-left my-3">
                <form action='{{ url('/postagem')}}'>
                    <input class="btn btn-secondary" role="button" value="Retornar" type="submit" ></input>
                </form>
            </div>
            <div class="d-flex flex-row">
                <a class="btn btn-warning my-auto" href="{{ url('/postagem/'.$postagem->id.'/edit')}}" role="button">Editar</a>
                <form class="my-auto mx-3" method="POST" action='{{ url("/postagem/" . $postagem->id)}}' onsubmit="return ConfirmDelete()">
                    @method('DELETE')
                    @csrf
                    <input class="btn btn-danger" role="button" value="Excluir" type="submit" ></input>
                </form>
            </div>
                <table class="table my-5">
                        <thead>
                            <tr>
                                <th>Categoria</th>
                                <th>Título</th>
                                <th class="text-center">Conteudo</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <th scope="row">{{$postagem->categoria->name}}</th>
                                    <td>{{$postagem->titulo}}</td>
                                    <td class="d-flex flex-column justify-content-center">{!!$postagem->conteudo!!}</td>
                                </tr>
                            </tbody>
                        </table>
        </div>
    </div>
</div>
@endsection

