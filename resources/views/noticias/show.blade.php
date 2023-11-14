@extends('layouts.plantilla')

@section('title','Noticias Hidrobolivar')

@section('css')
<style>
    .alert-success {
    background-color: #403dc7;
    color: white;
    padding: 10px;
    text-align: center;
    display: none; /* Inicialmente oculta la alerta */
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

@section('content')



<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" >
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>{{$noticia->titulo}}</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="{{route('hidrobolivar')}}">Hidrobolivar</a></li>
                            <li><a href="{{route('noticias.index')}}">Noticias</a></li>

                        </ol>
                    </div>


                    <div style="display: flex; justify-content: space-between;">
                        @can('noticias.edit')
                         <a class="btn-white-line" href="{{ route('noticias.edit',$noticia) }}">Editar Noticia</a> 
                        @endcan
                        
                        @can('noticias.destroy')
                        <form action="{{ route('noticias.destroy', $noticia) }}" method="POST" id="delete-form" onsubmit="return confirm('¿Estás seguro de que deseas borrar esta noticia?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn-white-line" type="submit">Borrar Noticia</button>
                        </form>                           
                        @endcan
                        

                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    <div class="page-bottom pbottom-70">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post-thumb big mbottom-60">
                                <!-- ***** Post Top Start ***** -->
                                <div class="img">
                                    @if (pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'jpg' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'png' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'jpeg' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'gif')
                                    <!-- Si es una imagen -->
                                    <img src="{{ asset('storage/noticias/' . basename($noticia->foto)) }}" alt="Imagen" style="width: 400px; height: 400px; object-fit: cover;">
                                @elseif (pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'mp4' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'webm' || pathinfo($noticia->foto, PATHINFO_EXTENSION) === 'ogg')
                                    <!-- Si es un video -->
                                    <div class="video-container">
                                        <video controls width="400" height="400">
                                        <source src="{{ asset('storage/noticias/' . basename($noticia->foto)) }}" type="video/mp4">
                                        Tu navegador no admite el elemento de video.
                                        </video>
                                    </div>
                                
                                @else
                                    <!-- Si no es ni imagen ni video, muestra un mensaje de error o manejo personalizado -->
                                    <img src="{{ asset('assets/images/photos/Logo.png') }}" style="width: 400px; height: 400px;">

                                @endif
                                    


                                    <div class="date">
                                        <strong>{{ $noticia->created_at->format('M') }}</strong>
                                        <span>{{ $noticia->created_at->format('d') }}</span>
                                    </div>
                                </div>
                                <div class="blog-text">
                                    <ul class="post-meta mbottom-20">
                                        <li><a href="#"><span class="icon fa fa-user"></span>{{$noticia->autor}}</a></li>

                                    </ul>
                                    <!-- ***** Post Top End ***** -->

                                    <!-- ***** Post Content Start ***** -->
                                    <div class="text post-detail">
                                        <p>{{$noticia->descripcion}}</p>

                                    <!-- ***** Post Content End ***** -->


                                </div>
                            </div>
                        </div>




                    </div>
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
