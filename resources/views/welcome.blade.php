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
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
								<p>Nunc quis dui scelerisque, scelerisque urna ut, dapibus orci. Sed vitae condimentum lectus, ut imperdiet quam. Maecenas in justo ut nulla aliquam sodales vel at ligula. Sed blandit diam odio, sed fringilla lectus molestie sit amet. Praesent eu tortor viverra lorem mattis pulvinar feugiat in turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce ullamcorper tellus sit amet mattis dignissim. Phasellus ut metus ligula. Curabitur nec leo turpis. Ut gravida purus quis erat pretium, sed pellentesque massa elementum. Fusce vestibulum porta augue, at mattis justo. Integer sed sapien fringilla, dapibus risus id, faucibus ante. Pellentesque mattis nunc sit amet tortor pellentesque, non placerat neque viverra. </p>
								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
@endforeach
@endsection