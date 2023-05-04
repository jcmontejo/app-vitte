<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('/dashboard') }}">
            <span class="align-middle">CONTROL OPERATIVO</span>
        </a>
        <ul class="sidebar-nav">
            {{-- <li class="sidebar-header">
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
            </li> --}}
            <li class="sidebar-item">
                <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase align-middle"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg> <span class="align-middle">UI Elements</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-offcanvas.html">Offcanvas <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-placeholders.html">Placeholders <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-tabs.html">Tabs <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
                </ul>
            </li>
            {{-- <li class="sidebar-header">
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
            </li> --}}
        </ul>
        {{-- <div class="sidebar-cta">
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
        </div> --}}
    </div>
</nav>