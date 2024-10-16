@extends('layouts.app')

@section('content')

@foreach($autores as $value)
<a href="{{ url('feed/autor/' . $value->id) }}">{{$value->name}}</a><br>
@endforeach

@endsection