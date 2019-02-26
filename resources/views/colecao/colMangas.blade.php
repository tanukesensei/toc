@extends('layouts.dashboard')

@section('content')
<div class="content">
	<div class="container-fluid">

<!-- Fonts and icons  -- from Hipster Cards  -->

    <link href="{{ asset('css-cards/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link href="{{ asset('css-cards/hipster_cards.css') }}" rel="stylesheet" />

<!-- End of CSS-->
<div class="card">
		<div class="card-header card-header-primary card-colecao" color="white" ><h4>Meus Mangás:</h4></div>

			@foreach ($colecao as $c)
			<div class="card-box col-md-4 col-sm-6">
                	<div class="card" data-background="image" data-src="{{ Storage::url($c->imagem) }}" alt="{{$c->imagem}}">
                    <div class="header">
                        <div class="category"> <!--aqui começa o que falta no resultado. -->
													<!-- A class category é onde aparece fica o botão laranja -->
                            <a href="/colecao/edit/{{ $c->id }}">
                            	<h6 class="label label-danger">
                            		<i class="material-icons">settings_applications</i>
                            	</h6>
                            </a>
<!-- pin_person começa aqui-->
														<a href="#">
															<h6 class="label label-success" id="person_pin">

																<i class="material-icons">person_pin</i>
															</h6>
														</a>

<!--pin_person termina aqui-->

                        </div> <!-- aqui termina o que falta no resultado. -->
                    </div>

                    <div class="content">
                        <h4 class="title title-uppercase">
                        	<!--  Trocar por {{$c->id }} quando a página de exibir capas estiver pronta. -->
                            <a href="#">{{$c->nome }}</a>
                        </h4>
                	<p class="description">{{$c->descricao}}</p>
                    </div>
                    <div class="filter">

                    </div>
                </div>
		<!-- end card -->
            </div>
			@endforeach
</div>

	</div>
</div>

@endsection
