@extends('layouts.dashboard')

@section('content')
<div class="content">

    @foreach ($users as $i)
    <input type="hidden" name="id" value="{{ $i->id }}">
    <h3>Bem vindo
      @if (empty($i->username))
      {{$i->email}}
      @else
      {{$i->username}}
      @endif
    </h3>
    <!--
    <img src="{{Storage::url('avatar/DisHFMJw7p2kEl2bonhllmNSBBLcULE2xhY37O4I.png')}}" alt="">
    Exemplo de como exibir uma imagem estática.
    -->
    <img src="{{Storage::url($i->imagem)}}" alt="{{$i->imagem}}">
    <h5>Sobre Min: {{$i->descricao}}</h5>

    @endforeach

</div>
@endsection
