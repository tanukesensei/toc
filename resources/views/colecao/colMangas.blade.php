@extends('layouts.dashboard')

@section('content')
<div class="content">
  <h4>Meus Mangás:</h4>
  @foreach ($colecao as $c)
  <a href="#">{{$c->nome }}
    <img src="{{Storage::url($c->imagem)}}" alt="{{$c->imagem}}">
  </a><br /><br />
  @endforeach
</div>
@endsection
