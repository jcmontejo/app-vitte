<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="ordenesDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        POSICIONAMIENTO DE IMAGEN
    </a>
    <div class="dropdown-menu" aria-labelledby="ordenesDropdown">
        <a class="dropdown-item" href="#">Redes sociales. Gestión con métricas</a>
        <a class="dropdown-item" href="#">WhatsApp Center</a>
        <a class="dropdown-item" href="#">Call Center</a>
        <a class="dropdown-item" href="#">Robo Call</a>
        <a class="dropdown-item" href="#">Envio masivo de mensajes</a>
        <a class="dropdown-item" href="#">Videos cortos (podcast)</a>
        <a class="dropdown-item" href="#">Tik Tok Live</a>
        <a class="dropdown-item" href="#">Entrevistas</a>
        <a class="dropdown-item" href="#">Pauta publicitaria</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="ordenesDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        ANÁLISIS GEOESTADÍSTICO
    </a>
    <div class="dropdown-menu" aria-labelledby="ordenesDropdown">
        <a class="dropdown-item" href="#">Cartografía y estadística electoral</a>
        <a class="dropdown-item" href="#">Cartografía de fuerza política</a>
        <a class="dropdown-item" href="#">Históricos de fuerzas políticas</a>
    </div>
</li>
{{-- <li class="nav-item">
    <a class="nav-link" href="#">ANÁLISIS DE OPINIÓN PÚBLICA</a>
</li> --}}
<li class="nav-item">
    <a class="nav-link" href="#">ENCUESTAS</a>
</li>
{{-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="ordenesDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        ORGANIGRAMA DE ESTRUCTURA
    </a>
    <div class="dropdown-menu" aria-labelledby="ordenesDropdown">
        <a class="dropdown-item" href="#">Estructura por alcandía</a>
    </div>
</li> --}}
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="ordenesDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        PLANEACION ESTRATEGICA
    </a>
    <div class="dropdown-menu" aria-labelledby="ordenesDropdown">
        <a class="dropdown-item" href="#">Agenda institutional</a>
        <a class="dropdown-item" href="#">Programa de actividades</a>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">MONITOREO DE CONTRINCANTES</a>
</li>
{{-- <li class="nav-item">
    <a class="nav-link" href="#">CONTROL DE CRISIS</a>
</li> --}}
<li class="nav-item">
    <a class="nav-link" href="#">OFENSIVA</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">RECURSOS</a>
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
