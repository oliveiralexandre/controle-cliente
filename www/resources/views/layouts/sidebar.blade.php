<!--
    ====================================
    ——— LEFT SIDEBAR WITH FOOTER
    =====================================
-->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{route('home')}}">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"
                    width="30" height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">Painel Admin</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub active">
                    <a class="sidenav-item-link" href="{{route('home')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('clientes.index')}}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Clientes</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('produtos.index')}}">
                        <i class="mdi mdi-shopping"></i>
                        <span class="nav-text">Produtos</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
