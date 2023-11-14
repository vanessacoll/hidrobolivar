<nav class="main-nav" >
    <!-- ***** Logo Start ***** -->
    <a href="{{ route('hidrobolivar') }}" class="logo">
        <img src="{{asset('assets/images/photos/Logo.png')}}" alt="Hidrobolivar"  style="width: 100px; " />
    </a>
    <!-- ***** Logo End ***** -->

    <!-- ***** Menu Start ***** -->
    <ul class="nav">
        
      <!--  <li><a href="blue-our-work.html">OUR WORK</a></li> -->
        <li><a href="{{ route ('nosotros') }}">Nosotros</a></li>
      <!--  <li><a href="blue-services.html">SERVICES</a></li> -->
        <li><a href="{{ route('noticias.index') }}">Noticias</a></li>

        <li><a href="{{ route('pagos') }}">Métodos de pago</a></li>

        @can('permiso.index')
        <li><a href="{{route ('admin.users.index')}}" class="btn-nav-line">Usuarios</a></li>
        <li><a href="{{route ('admin.role.index')}}" class="btn-nav-line">Roles</a></li>
        @endcan

        
        @auth
        <!-- Botones de cierre de sesión aquí -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); this.closest('form').submit();">
                Cerrar Sesión
            </a>
          </li>
        </form>
        @endauth
      </ul>
    <a class='menu-trigger'>
        <span>Menu</span>
    </a>
    <!-- ***** Menu End ***** -->
</nav>
