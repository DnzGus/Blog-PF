@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <table class="table my-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th class="text-center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <th scope="row">{{$categoria->id}}</th>
                                    <td>{{$categoria->name}}</td>
                                    <td class="d-flex justify-content-around">
                                        <a class="btn btn-warning" href="{{ url('/categoria/'.$categoria->id.'/edit')}}" role="button">Editar</a>
                                        <form method="POST" action='{{ url('/categoria/' . $categoria->id)}}'>
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-danger" role="button" value="Excluir" type="submit" ></input>
                                        </form>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection

