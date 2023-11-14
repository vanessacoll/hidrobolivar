@extends('layouts.plantilla')

@section('title','Administrador - Roles')

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

</style>

@endsection

@section('content')



<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="{{asset('assets/images/photos/fondo.png')}}">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Creación de Rol</h1>
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
                                        
                                                        
                                                        <div class="container " >
                                                            
                                                            {!! Form::open(['route'=>'admin.role.store']) !!}
                                                            @include('admin.roles.partials.form')
                                                            
                                                            <div class="col-lg-12 mt-5">
                                                                <div class="d-flex justify-content-between">
                                                                    <button type="submit" class="btn-primary-line float-left mx-2">Crear Rol</button>
                                                                    <a class="btn-primary-line float-right mx-5" href="{{route('admin.role.index')}}">Cancelar</a>
                                                                </div>
                                                            </div>

                                                            
                                                            
                                                            {!! Form::close() !!}
                                                        
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
    </div>
    <!-- ***** Page Content End ***** -->
</section>

@endsection
