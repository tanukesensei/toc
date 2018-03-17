@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header" data-background-color="red">
                <i class="material-icons">book</i>
              </div>
              <div class="card-content">
                <p class="category">Livros</p>
                <h3 class="title">{{ $livros }}</h3>
              </div>
              <div class="card-footer">
                <a href="#"></a>
                <div class="stats">
                   <i class="material-icons text-primary">find_in_page</i><a href="#">Visualizar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header" data-background-color="blue">
                <i class="material-icons">developer_board</i>
              </div>
              <div class="card-content">
                <p class="category">Revistas</p>
                <h3 class="title">{{ $revistas }}</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons text-primary">find_in_page</i> <a href="#">Visualizar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header" data-background-color="orange">
                <i class="material-icons">burst_mode</i>
              </div>
              <div class="card-content">
                <p class="category">Mangás</p>
                <h3 class="title"> {{ $mangas }}</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons text-primary">find_in_page</i> <a href="#">Visualizar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header" data-background-color="green">
                <i class="material-icons">high_quality</i>
              </div>
              <div class="card-content">
                <p class="category">Quadrinhos</p>
                <h3 class="title">{{ $hqs }}</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons text-primary">find_in_page</i> <a href="#">Visualizar</a>
                </div>
              </div>
            </div>
          </div>

</div><!--fecha o row-->
<!--    <div class="row"></div>-->
</div>
</div>
@endsection
