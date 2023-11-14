@extends('layouts.plantilla')

@section('css')

<style>
 .custom-right {
    float: right !important;
}
.alert-success {
    background-color: #403dc7;
    color: white;
    padding: 10px;
    text-align: center;
    display: block; /* Cambia esto para mostrar la alerta por defecto */
}

/* Estilos para el contenedor del video */
.video-container {
  display: flex; /* Usamos flexbox para centrar horizontal y verticalmente */
  justify-content: center; /* Centramos horizontalmente */
  align-items: center; /* Centramos verticalmente */
  height: 100vh; /* Establecemos la altura al 100% del viewport para centrar en la pantalla completa */
}

/* Estilos para el video */
.video-container video {
  max-width: 100%; /* Ajusta el ancho máximo según sea necesario */
  max-height: 100%; /* Ajusta la altura máxima según sea necesario */
}



</style>
@endsection

@section('title','Noticias Hidrobolivar')

@section('content')

<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" >
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Noticias Hidrobolivar</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="blue-index.html">Hidrobolivar</a></li>
                            <li class="active">Noticias</li>
                        </ol>
                    </div>
                    @can('noticias.create')
                    <div style="display: flex; justify-content: flex-end;">
                        <a class="btn-white-line" href="{{ route('noticias.create') }}">Crear Noticia</a>
                    </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    <div class="page-bottom pbottom-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-list">
                        <div class="row">


                            <!-- ***** Blog Post Standard Start ***** -->
                            <div class="row">
                                @foreach ($noticias as $noticia)
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="blog-post-thumb">
                                            <div class="img">
                                                @if (isset($noticia->foto) && pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'jpg' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'png' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'jpeg' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'gif')
                                                    <img src="{{ asset('storage/noticias/' . basename($noticia->foto)) }}" alt="" style="width: 400px; height: 400px;">
                                                @elseif (isset($noticia->foto) && (pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'mp4' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'webm' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'ogg'))
                                                    <!-- Si es un video -->
                                    <div class="video-container">
                                        <video controls width="400" height="400">
                                          <source src="{{ asset('storage/noticias/' . basename($noticia->foto)) }}" type="video/mp4">
                                          Tu navegador no admite el elemento de video.
                                        </video>
                                      </div>
                                                @else
                                                    <img src="{{ asset('assets/images/photos/Logo.png') }}" > 
                                                @endif
                                               
                                                <div class="date">
                                                    <strong>{{ $noticia->created_at->format('M') }}</strong>
                                                    <span>{{ $noticia->created_at->format('d') }}</span>
                                                </div>
                                        </div>
                                            <div class="blog-text">
                                                <ul class="post-meta">
                                                    <li><a href="#"><span class="icon fa fa-user"></span>{{$noticia->autor}}</a></li>
                                                </ul>
                                                <h3>
                                                    <a href="blue-blog-single.html">{{$noticia->titulo}}</a>
                                                </h3>
                                                <div class="text">
                                                    {{$noticia->descripcion}}
                                                </div>
                                                <a href="{{route('noticias.show',$noticia)}}" class="btn-primary-line">Leer Mas</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>

                    <!-- ***** Pagination Start ***** -->
                    <nav>
                        <ul class="pagination justify-content-center">
                            @if ($noticias->currentPage() > 1)
                                <li class="page-item">
                                    <a class="page-link" href="{{ $noticias->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                </li>
                            @endif

                            @for ($i = 1; $i <= $noticias->lastPage(); $i++)
                                <li class="page-item {{ $i == $noticias->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $noticias->url($i) }}"><span>{{ $i }}</span></a>
                                </li>
                            @endfor

                            @if ($noticias->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $noticias->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </nav>

                    <!-- ***** Pagination End ***** -->
                </div>


            </div>
        </div>
    </div>
    <!-- ***** Page Content End ***** -->
</section>

@endsection

@section('js')

<script>
    // Selecciona la alerta de éxito
    var alertSuccess = document.querySelector('.alert-success');

    // Verifica si la alerta está presente
    if (alertSuccess) {
        // Muestra la alerta
        alertSuccess.style.display = 'block';

        // Oculta la alerta después de 3 segundos (3000 milisegundos)
        setTimeout(function() {
            alertSuccess.style.display = 'none';
        }, 3000); // Cambia el tiempo según tus preferencias
    }
</script>


@endsection

