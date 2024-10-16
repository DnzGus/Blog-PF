@extends('layouts.app')

@section('content')

@foreach($categorias as $value)
<a href="{{ url('feed/categoria/' . $value->id) }}">{{$value->name}}</a><br>
@endforeach

@endsection