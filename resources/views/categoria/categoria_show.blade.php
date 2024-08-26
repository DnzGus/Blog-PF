@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                    </tr>
                    <tr>
                        <td>
                        {{$categoria->id}}
                        </td>
                        <td>
                        {{$categoria->name}}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

