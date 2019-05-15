@extends('layouts.dashboard')

@section('content')

<div class="content">
	<div class="container-fluid">

<!-- Fonts and icons  -- from Hipster Cards  -->

    <link href="{{ asset('css-cards/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link href="{{ asset('css-cards/hipster_cards.css') }}" rel="stylesheet" />

<!-- End of CSS-->
<div class="card">
		<div class="card-header card-header-primary card-colecao" color="white" ><h4>Volumes:</h4></div>

@forelse ($infos as $info)

<div class="card-box col-md-4 col-sm-6">
						<div class="card" data-background="image" data-src="{{ Storage::url($info->imagem) }}" alt="{{ $info->imagem }}">
							<div class="header">
									<div class="category">
											<a href="/volumes/show/{{ $info->id }}">
												<h6 class="label label-danger">
													<i class="material-icons">settings_applications</i>
												</h6>
											</a>

									</div>
							</div>

							<div class="content">
									<h4 class="title title-uppercase">

											<a href="#">{{ $info->titulo_volume }} </a>
									</h4>
						<p class="description">{{$info->descricao}}</p>
							</div>
							<div class="filter">

							</div>
					</div>
<!-- end card -->
			</div>

@empty

@for($i = 0; $i < $volumes; $i++)
			<div class="card-box col-md-4 col-sm-6">
                	<div class="card" data-background="image" data-src="#" alt="#">
                    <div class="header">
                        <div class="category">
                            <a href="/volumes/create/{{ $col }}">
                            	<h6 class="label label-info">
                            		<i class="material-icons">library_add</i>
                            	</h6>
                            </a>

                        </div>
                    </div>

                    <div class="content">
                        <h4 class="title title-uppercase">

                            <a href="/volumes/create/{{ $i+1 }}">Adicionar volume {{ $i+1 }} </a>
                        </h4>
                	<p class="description">descricao do volume</p>
                    </div>
                    <div class="filter">

                    </div>
                </div>
		<!-- end card -->
            </div>
@endfor
@endforelse
</div>

	</div>
</div>

@endsection
