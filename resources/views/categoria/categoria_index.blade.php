@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a class="btn btn-success" href="{{ url('/categoria/create') }}" role="button">Criar</a>
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
                        <td><a class="btn btn-primary" href="{{ url('/categoria/'.$value->id)}}" role="button">Vizualizar</a></td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

