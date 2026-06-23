<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="#" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('backend/images/logo.png') }}" srcset="{{ asset('backend/images/logo2x.png 2x') }}"
                    alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('backend/images/logo-dark.png') }}"
                    srcset="{{ asset('backend/images/logo-dark2x.png 2x') }}" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('backend/images/logo-small.png') }}"
                    srcset="{{ asset('backend/images/logo-small2x.png 2x') }}" alt="logo-small">
            </a>
        </div>

        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu">
                <em class="icon ni ni-menu"></em>
            </a>
        </div>
    </div><!-- .nk-sidebar-element -->

    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Main</h6>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.students.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">List Pengguna</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.payments.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                            <span class="nk-menu-text">List Transaksi</span>
                        </a>
                    </li>

                    <!-- .nk-menu-item-heading -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Master Data</h6>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.courses.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-view-list"></em></span>
                            <span class="nk-menu-text">Program Belajar</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.periods.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-calender-date"></em></span>
                            <span class="nk-menu-text">Periode</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.transports.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-traffic-signal"></em></span>
                            <span class="nk-menu-text">Akomodasi</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.banks.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-money"></em></span>
                            <span class="nk-menu-text">Bank</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.contacts.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-whatsapp"></em></span>
                            <span class="nk-menu-text">Kontak CS</span>
                        </a>
                    </li>

                    <!-- .nk-menu-item-heading -->
                    {{-- <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Perizinan</h6>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.permits.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">Perizinan</span>
                        </a>
                    </li> --}}
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
