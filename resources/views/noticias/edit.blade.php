@extends('layouts.plantilla')

@section('title','Creacion de Noticia')

@section('css')
<style>
    .alert-success {
    background-color: #403dc7;
    color: white;
    padding: 10px;
    text-align: center;
    display: none; /* Inicialmente oculta la alerta */
}

.custom-btn {
        margin-right: 10px; /* Margen derecho para separar los botones */
    }

.error-message{
    color: red;

}

.form-editar {
    width: 100%; /* Haz que la tabla ocupe todo el ancho disponible */
    border-collapse: collapse; /* Combina los bordes de las celdas */
    font-size: 16px; /* Cambia el tamaño de fuente, ajusta según sea necesario */
    background-color: rgba(0, 0, 255, .2); /* Fondo azul con 50% de transparencia */
    padding: 20px; /* Añade relleno según sea necesario */
    border-radius: 10px; /* Puedes agregar esquinas redondeadas si lo deseas */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Agrega sombra si deseas */
}

.input-readonly {
  background-color: gainsboro; /* Cambia este valor al color que desees */
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
                        <h1>Noticias</h1>
                    </div>
                   

                    
                    {{--
                    <div>
                        {{ dd(auth()->user()->hasPermissionTo('permiso.index')) }}
                    </div>
                    --}}
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
                               
                                <div class="blog-text">
                                   
                                    <!-- ***** Post Top End ***** -->

                                    <!-- ***** Post Content Start ***** -->
                                    <div class="text post-detail">
                                        <div class="centered-form mt-5 ">
                                            <div class="col-lg-12 mt-5">
                                                <div class="post-comment">
                                                    
                                                    <div class="comment-form">
                                        
                                                        @include('noticias.partials.formulario-editar')  
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

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
