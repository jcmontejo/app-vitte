<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('/dashboard') }}">
            <span class="align-middle">CONTROL OPERATIVO</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Admin
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ url('/dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Panel
                        Principal</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-profile.html">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Perfil</span>
                </a>
            </li>
            <li class="sidebar-header">
                Plantas y Procesos
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/plant/plant') }}">
                    <i class="align-middle" data-feather="navigation"></i> <span class="align-middle">Plantas
                        potabilizadoras</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-forms.html">
                    <i class="align-middle" data-feather="layers"></i> <span class="align-middle">Modelos de
                        Bombas</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-cards.html">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Reportes</span>
                </a>
            </li>
            <li class="sidebar-header">
                Seguridad
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/user/user') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Usuarios</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Aplicación Movil</strong>
                <div class="mb-3 text-sm">
                    Descarga y prueba la aplicación móvil para dispositivos Android.
                </div>
                <div class="d-grid">
                    <a target="_blank"
                        href="https://drive.google.com/file/d/1j3boSHOvuQqPAcBdWZyw584OPDaMKbz6/view?usp=share_link"
                        class="btn btn-primary">Probar App</a>
                </div>
            </div>
        </div>
    </div>
</nav>