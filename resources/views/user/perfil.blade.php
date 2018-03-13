@extends('layouts.dashboard')

@section('content')
<div class="content">



    @foreach ($users as $u)
    <input type="hidden" name="id" value="{{ $u->id }}">
    <h3>Bem vindo
      @if (empty($u->username))
      {{$u->email}}
      @else
      {{$u->username}}
      @endif
    </h3>
    <!--
    <img src="{{Storage::url('avatar/DisHFMJw7p2kEl2bonhllmNSBBLcULE2xhY37O4I.png')}}" alt="">
    Exemplo de como exibir uma imagem estática.
    -->
    <img src="{{Storage::url($u->imagem)}}" alt="{{$u->imagem}}">
    <h5>Sobre Min: {{$u->descricao}}</h5>

    @endforeach

</div>
@endsection
