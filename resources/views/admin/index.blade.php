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

.ov-btn-grow-ellipse {
  background: transparent; /* color de fondo */
  color: #4741d7; /* color de fuente */
  border: 2px solid #4741d7; /* tamaño y color de borde */
  padding: 2px 5px; /* Reducción del padding para hacer el botón más pequeño */
  border-radius: 15px; /* redondear bordes */
  position: relative;
  z-index: 1;
  overflow: hidden;
  display: inline-block;
}

.ov-btn-grow-ellipse:hover {
  color: #fff; /* color de fuente hover */
}

.ov-btn-grow-ellipse::after {
  content: "";
  background: #4741d7; /* color de fondo hover */
  position: absolute;
  z-index: -1;
  padding: 10px 14px; /* Reducción del padding para hacer el botón más pequeño */
  display: block;
  border-radius: 50%;
  left: -50%;
  right: -50%;
  top: -150%;
  bottom: -150%;
  transform: scale(0, 0);
  transition: all 0.4s ease;
}

.ov-btn-grow-ellipse:hover::after {
  transition: all 0.6s ease-out;
  transform: scale(1, 1);
}

table {
    background-color: rgba(0, 0, 255, .2); /* Fondo azul con 50% de transparencia */
    padding: 20px; /* Añade relleno según sea necesario */
    border-radius: 10px; /* Puedes agregar esquinas redondeadas si lo deseas */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Agrega sombra si deseas */
    }

    /* Estilos para las celdas de encabezado */
th {
   /* background-color: rgba(0, 0, 255, 0.2); /* Fondo azul con transparencia */
    padding: 10px; /* Añade relleno según sea necesario */
}

/* Estilos para las celdas de datos */
td {
    padding: 10px; /* Añade relleno según sea necesario */
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
                        <h1>Control de Usuarios</h1>
                    </div>
                   

                    <div style="display: flex; justify-content: flex-end;">
                        <a class="btn-white-line" href="{{ route('register') }}">Registrar Usuario</a>
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
        @if(session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
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
                                                <table  class="  mt-5" style="width:100%">
                                                    <thead>
                                                        
                                                        <tr>
                                                            
                                                            <th  class="text-center">Id</th>
                                                            <th  class="text-center">Nombre</th>
                                                            <th  class="text-center">Email</th>
                                                            <th  class="text-center">Rol Asignado</th>
                                                            <th  class="text-center"></th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ( $users as $user )
                                                        <tr>
                                                            <td  class="text-center">{{$user->id}}</td>
                                                            <td  class="text-center">{{$user->name}}</td>
                                                            <td  class="text-center">{{$user->email}}</td>
                                                            <td  class="text-center">
                                                             @if ($user->roles->count() > 0)
                                                                 @foreach ($user->roles as $role)
                                                                    {{ $role->name }}
                                                                 @endforeach
                                                            @else
                                                             No tiene roles asignados.
                                                            @endif
                                                     </td>

                                                            <td class="text-center" >
                                                                <a href="{{route('admin.users.edit',$user)}}" class="ov-btn-grow-ellipse">Editar Usuario</a>
                                                            </td>

                                                        </tr>
                                                        @endforeach   
                                                    </tbody>
                                                 
                                                </table>
                                                
                                                <nav class="mt-5">
                                                    <ul class="pagination justify-content-center">
                                                        @if ($users->currentPage() > 1)
                                                            <li class="page-item">
                                                                <a class="page-link" href="{{ $users->previousPageUrl() }}" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Anterior</span>
                                                                </a>
                                                            </li>
                                                        @endif
                            
                                                        @for ($i = 1; $i <= $users->lastPage(); $i++)
                                                            <li class="page-item {{ $i == $users->currentPage() ? 'active' : '' }}">
                                                                <a class="page-link" href="{{ $users->url($i) }}"><span>{{ $i }}</span></a>
                                                            </li>
                                                        @endfor
                            
                                                        @if ($users->hasMorePages())
                                                            <li class="page-item">
                                                                <a class="page-link" href="{{ $users->nextPageUrl() }}" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Siguiente</span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </nav>
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
