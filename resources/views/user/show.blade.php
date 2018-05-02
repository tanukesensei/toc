@extends('layouts.dashboard')

@section('content')
<div class="content">

    <input type="hidden" name="id" value="{{ $users->id }}">
    <h3>
      @if (empty($users->username))
      {{$users->email}}
      @else
      {{$users->username}}
      @endif
    </h3>
    <!--
    Exemplo de como exibir uma imagem estática.
    -->
    <img src="{{Storage::url('avatar/DisHFMJw7p2kEl2bonhllmNSBBLcULE2xhY37O4I.png')}}" alt="">
    <img src="{{Storage::url($users->imagem)}}" alt="{{$users->imagem}}">
    <h4>Sobre Min: {{$users->descricao}}</h4>
    <h4>Minhas coleções:</h4>
    @foreach ($colecao as $c)
      <a href="#">{{$c->nome}}</a>
    @endforeach

  </div>
  @endsection
