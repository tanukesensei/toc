@extends('layouts.dashboard')

@section('content')
<div class="content">
  <h4>Minhas Revistas:</h4>
  @foreach ($colecao as $c)
    <a href="#">{{$c->nome }}</a><br />
    <img src="{{Storage::url($c->imagem)}}" alt="{{$c->imagem}}"><br />
  @endforeach
</div>
@endsection
