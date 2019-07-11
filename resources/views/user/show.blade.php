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

    <div class="col-md-4">
      <div class="card card-profile">
        <div class="card-avatar">
          <a href="#pablo">
            <img class="img" src="{{Storage::url('avatar/DisHFMJw7p2kEl2bonhllmNSBBLcULE2xhY37O4I.png')}}" />
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-category text-gray">CEO / Co-Founder</h6>
          <h4 class="card-title">Alec Thompson</h4>
          <p class="card-description">
            {{$users->descricao}}
          </p>
          <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
        </div>
      </div>
    </div>
  </div>
  @endsection
