@extends('layouts.dashboard')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="card">
			<div class="card-header card-header-primary" color="white" ><h4>Meus Mangás:</h4></div>
			  	<div class="card-body">
			  		  @foreach ($colecao as $c)
				  <a href="#">{{$c->nome }}
				    <img src="{{Storage::url($c->imagem)}}" alt="{{$c->imagem}}">
				  </a><br /><br />
				  @endforeach
			  	</div>
		</div>
	</div>
</div>
@endsection
