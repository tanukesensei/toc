@extends('layouts.dashboard')

@section('content')


<div class="content">
	<div class="container-fluid">

<!-- Fonts and icons  -- from Hipster Cards  -->

    <link href="{{ asset('css-cards/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link href="{{ asset('css-cards/hipster_cards.css') }}" rel="stylesheet" />

<!-- End of CSS-->
<div class="card">
		<div class="card-header card-header-primary card-colecao" color="white" ><h4>Resultados:</h4></div>

			@forelse ($resultado as $r)

			<div class="card-box col-md-4 col-sm-6">
                	<div class="card" data-background="image" data-src="{{ Storage::url($r->imagem) }}" alt="{{$r->imagem}}">
                    <div class="header">
                        <div class="category">
													@if ($r->usuario == $u)
													<a href="/colecao/edit/{{ $r->id }}">
														<h6 class="label label-danger">
															<i class="material-icons">settings_applications</i>
														</h6>
													</a>
													@else
													<a href="#">
														<h6 class="label label-danger">
															<i class="material-icons">library_add</i>
														</h6>
													</a>
													@endif
                        </div>
                    </div>

                    <div class="content">
                        <h4 class="title title-uppercase">
                        	<!--  Trocar por {{$r->id }} quando a página de exibir capas estiver pronta. -->
                            <a href="#">{{$r->nome }}</a>
                        </h4>
                	<p class="description">{{$r->descricao}}</p>
                    </div>
                    <div class="filter">

                    </div>
                </div>
		<!-- end card -->
            </div>
				@empty
				<h1> Ops, parace que a coleção ainda não foi cadastrada ¯\_(ツ)_/¯... </h1>
			@endforelse
</div>

	</div>
</div>


@endsection
