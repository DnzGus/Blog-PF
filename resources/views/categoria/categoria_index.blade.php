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
             @foreach($categorias as $value)
             <tr>
              <td>
               {{$value->id}}
              </td>
              <td>
               {{$value->name}}
              </td>
             </tr>
             @endforeach
            </table>
                
            </div>
        </div>
    </div>
</div>
@endsection

