<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="{{ url('/dashboard') }}" class="brand-link">
            <!--begin::Brand Image-->
            <img
                src="{{ asset('img/logo.png') }}"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">LARA-KLINIK</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelurahan" class="nav-link {{ Request::is('kelurahan*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-house"></i>
                        <p>Kelurahan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/paramedik" class="nav-link {{ Request::is('paramedik*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-house"></i>
                        <p>Paramedik</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pasien" class="nav-link {{ Request::is('pasien*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-house"></i>
                        <p>Pasien</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/periksa" class="nav-link {{ Request::is('periksa*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-house"></i>
                        <p>Periksa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/unitkerja" class="nav-link {{ Request::is('unitkerja*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-house"></i>
                        <p>Unit Kerja</p>
                    </a>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
