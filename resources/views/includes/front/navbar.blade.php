<header
    class="site-header site-header--menu-center site-header--absolute site-header--sticky {{ Route::currentRouteName() == 'landing.index' ? 'landing-1-menu dark-mode-texts' : 'landing-inner-menu inner-menu-bg' }} ">
    {{-- landing-inner-menu inner-menu-bg --}}
    <div class="container-fluid">
        <nav class="navbar site-navbar">
            <!-- Brand Logo-->
            <div class="brand-logo">
                <a href="{{ route('landing.index') }}" class="btn log-in-btn focus-reset">
                    Brilliant English Course
                </a>
            </div>

            <div class="menu-block-wrapper">
                <div class="menu-overlay"></div>
                <nav class="menu-block" id="append-menu-header">

                    <div class="mobile-menu-head">
                        <div class="go-back">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>

                    <ul class="site-menu-main">
                        <li class="nav-item">
                            <a href="{{ route('landing.index') }}#" class="nav-link-item">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('landing.index') }}#tentang" class="nav-link-item">Tentang</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('landing.index') }}#keunggulan" class="nav-link-item">Keunggulan</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('landing.index') }}#alur" class="nav-link-item">Alur</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('landing.index') }}#program" class="nav-link-item">Program</a>
                        </li>

                        <!-- fasilitas -->
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Fasilitas <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="sub-menu" id="submenu-1">
                                <li class="sub-menu--item">
                                    <a href="#">Asrama</a>
                                </li>
                            </ul>
                        </li>
                        <!-- ./fasilitas -->

                        <!-- LiveTour -->
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger text-nowrap">
                                Live Tour <i class="fas fa-angle-down"></i>
                            </a>

                            <ul class="sub-menu" id="submenu-1">
                                <li class="sub-menu--item">
                                    <a href="{{ route('landing.livetour.home') }}">Beranda Brilliant</a>
                                </li>

                                <li class="sub-menu--item">
                                    <a href="{{ route('landing.livetour.hall') }}">Aula Brilliant</a>
                                </li>

                                <li class="sub-menu--item">
                                    <a href="{{ route('landing.livetour.classroom') }}">Ruang Kelas</a>
                                </li>

                                <li class="sub-menu--item nav-item-has-children">
                                    <a href="#" data-menu-get="h3" class="drop-trigger">Asrama<i class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-10">
                                        <li class="sub-menu--item">
                                            <a href="{{ route('landing.livetour.asrama.reguler') }}">Reguler</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ route('landing.livetour.asrama.homestay') }}">Homestay</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ route('landing.livetour.asrama.vip') }}">VIP</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- ./LiveTour -->
                    </ul>
                </nav>
            </div>

            <!-- mobile menu trigger -->
            <div class="mobile-menu-trigger">
                <span></span>
            </div>
            <!--/.Mobile Menu Hamburger Ends-->
        </nav>
    </div>
</header>
