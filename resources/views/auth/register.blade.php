@extends('layouts.plantilla')

@section('title','Administrador - Usuarios')

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

    .input-small {
    width: 80%; /* Ajusta el ancho según tus necesidades */
    /* Otros estilos personalizados si es necesario */
}

</style>

@endsection

@section('content')



<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Registro de Usuario</h1>
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
                                                            
                                                            <form method="POST" action="{{ route('register') }}" class="flex flex-col items-center">
                                                                @csrf

                                                                <div class="flex flex-col md:flex-row md:justify-between w-full">
        
                                                                    <div class="mb-4 md:w-1/2">
                                                                        <x-input-label for="name" :value="__('Nombre: ')" />
                                                                        <x-text-input id="name" class="block mt-1 input-small" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                                    </div>

                                                                    <div class="mb-4 md:w-1/2">
                                                                        <x-input-label for="email" :value="__('Email')" />
                                                                        <x-text-input id="email" class="block mt-1 input-small" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                                    </div>
                                                                </div>

                                                                <div class="flex flex-col md:flex-row md:justify-between w-full">
        
                                                                    <div class="mb-4 md:w-1/2">
                                                                        <x-input-label for="password" :value="__('Contraseña')" />
                                                                        <x-text-input id="password" class="block mt-1 input-small" type="password" name="password" required autocomplete="new-password" />
                                                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                                    </div>

                                                                    <div class="mb-4 md:w-1/2">
                                                                        <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                                                                        <x-text-input id="password_confirmation" class="block mt-1 input-small" type="password" name="password_confirmation" required autocomplete="new-password" />
                                                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                                    </div>
                                                                </div>

                                                                    
                                                                <div class="col-lg-12 mt-5">
                                                                    <div class="d-flex justify-content-between">
                                                                        <button type="submit" class="btn-primary-line float-left mx-2">Registrar Usuario</button>
                                                                        <a class="btn-primary-line float-right mx-5" href="{{route('admin.users.index')}}">Cancelar</a>
                                                                    </div>
                                                                </div>
    

                                                                </form>


                                                        
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
