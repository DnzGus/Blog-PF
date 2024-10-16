@extends('layouts.app')

@section('content')
@foreach($postagens as $value)
<article class="post">
								<header>
									<div class="title">
										<h2><a href="{{url('/postagem/' . $value->id)}}">{{$value->titulo}}</a></h2>
									</div>
									<div class="meta">
										<time class="published" datetime="{{$value->created_at}}">{{$value->created_at}}</time>
										<a href="#" class="author"><span class="name">{{$value->user->name}}</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="data:image/png;base64,{{ $value->imagem }}" alt="" /></span>
								<p>{!!$value->conteudo!!}</p>
								<footer>
									<ul class="stats">
                                    <li><a href="{{ url('feed/categoria/' . $value->categoria->id) }}">{{$value->categoria->name}}</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
@endforeach
@endsection