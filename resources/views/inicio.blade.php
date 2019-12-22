@extends('layouts.master')

@section('contenido')
<div class="container">
  <div class=" row ._contenedor">
    <div class="col">
    <div class="w-100 _medio">
        <div id="carouselExampleFade" class="carousel slide carousel-fade _carousel" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/deportes.jpg" class="d-block w-100 " alt="..." style="height:300px">
              </div>
              <div class="carousel-item">
                <img src="img/tech.jpg" class="d-block w-100" alt="..." style="height:300px">
              </div>
              <div class="carousel-item">
                <img src="img/politica.jpg" class="d-block w-100" alt="..." style="height:300px">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="titulo">
              <h1>Mantenete informado las 24hs sobre los temas que mas te interesan</h1>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="css/inicio.css">
@endpush
