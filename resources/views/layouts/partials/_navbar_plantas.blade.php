<li class="nav-item active">
    <a class="nav-link" href="{{ url('/dashboard') }}">Inicio</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Administración</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="ordenesDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Plantas y Procesos
    </a>
    <div class="dropdown-menu" aria-labelledby="ordenesDropdown">
        <a class="dropdown-item" href="{{ url('/plantas/plantas') }}">Plantas</a>
        {{-- <a class="dropdown-item" href="#">Orden 2</a>
        <a class="dropdown-item" href="#">Orden 3</a> --}}
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="ordenesDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Seguridad
    </a>
    <div class="dropdown-menu" aria-labelledby="ordenesDropdown">
        <a class="dropdown-item" href="{{ url('/user/user') }}">Usuarios</a>
        <a class="dropdown-item" href="#">Roles</a>
        <a class="dropdown-item" href="#">Permisos</a>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Descargar App</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="ordenesDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }}
    </a>
    <div class="dropdown-menu" aria-labelledby="ordenesDropdown">
        <a class="dropdown-item" href="#">Perfil</a>
        <a class="dropdown-item" href="{{ url('signout') }}">Cerrar Sesión</a>
    </div>
</li>
