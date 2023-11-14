@extends('layouts.plantilla')

@section('title','Roles de usuario')

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
    width: 100%; /* Haz que la tabla ocupe todo el ancho disponible */
    border-collapse: collapse; /* Combina los bordes de las celdas */
    font-size: 16px; /* Cambia el tamaño de fuente, ajusta según sea necesario */
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
                        <h1>Lista de Roles</h1>
                    </div>
                

                    <div style="display: flex; justify-content: flex-end;">
                        <a class="btn-white-line" href="{{route('admin.role.create')}}">Crear Rol</a>
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
                                                @if(session('info'))
                                                <div class="alert alert-success">
                                                    {{ session('info') }}
                                                 </div>
                                             @endif
                                             @if(session('error'))
                                                <div class="alert alert-success">
                                                    {{ session('error') }}
                                                 </div>
                                             @endif
                                            
                                             <table  class="mt-5" >
                                                <thead>
                                                    
                                                    <tr class="text-center">
                                                        
                                                        <th>Id</th>
                                                        <th>Nombre del Rol</th>
                                                        <th></th>
                                                        <th></th>
                                                        
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ( $roles as $role )
                                                    <tr class="text-center">
                                                        <td>{{$role->id}}</td>
                                                        <td>{{$role->name}}</td>
                                                        
                                                        <td >
                                                            
                                                            <a href="{{route('admin.role.edit',$role)}}" class="ov-btn-grow-ellipse">Editar Rol</a>
                                                        </td>
                                                        
                                                        <td>
                                                        @can('role.destroy')
                                                            <form id="deleteForm" action="{{ route('admin.role.destroy', $role) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="ov-btn-grow-ellipse" type="submit" onclick="confirmDelete()">Eliminar Rol</button>
                                                            </form>
                                                        @endcan
                                                        </td>
                                                    </tr>
                                                    @endforeach   
                                                </tbody>
                                             
                                            </table>
                                            
                                            <nav class="mt-5">
                                                <ul class="pagination justify-content-center">
                                                    @if ($roles->currentPage() > 1)
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $roles->previousPageUrl() }}" aria-label="Previous">
                                                                <span aria-hidden="true">&laquo;</span>
                                                                <span class="sr-only">Anterior</span>
                                                            </a>
                                                        </li>
                                                    @endif
                        
                                                    @for ($i = 1; $i <= $roles->lastPage(); $i++)
                                                        <li class="page-item {{ $i == $roles->currentPage() ? 'active' : '' }}">
                                                            <a class="page-link" href="{{ $roles->url($i) }}"><span>{{ $i }}</span></a>
                                                        </li>
                                                    @endfor
                        
                                                    @if ($roles->hasMorePages())
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $roles->nextPageUrl() }}" aria-label="Next">
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

<script>
     function confirmDelete() {
        if (confirm("¿Estás seguro de que deseas eliminar este rol?")) {
            // Si el usuario confirma, envía el formulario
            document.getElementById('deleteForm').submit();
        } else {
            // Si el usuario cancela, no hace nada
        }
    }
</script>


@endsection
