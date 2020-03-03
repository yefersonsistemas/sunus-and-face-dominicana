
    <link rel="icon" href="{{ asset("/images/favicon.png") }}" type="image/x-icon">
<header class="page-head">
    <!-- RD Navbar minimal-->
    <div class="rd-navbar-wrap" style="position: sticky; z-index: 99;">
        <nav id="active-nav" class="rd-navbar rd-navbar-minimal rd-navbar-light" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed"
            data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-md-stick-up-offset="120px" data-lg-stick-up-offset="120px" data-lg-auto-height="true" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
                <div class="rd-navbar-top-panel">
                    <!--Navbar Brand-->
                    <div class="rd-navbar-brand d-none d-lg-inline-block">
                        <!--Brand-->
                        <a class="brand" href="{{ route('inicio') }}"><img class="brand-logo-dark logoNuevo" src="images/brand/Imagotipo_S&F-NOV_Horizontal.svg"/><img class="brand-logo-light logoNuevo" src="images/brand/Imagotipo_S&F-NOV_Horizontal.svg" /></a>
                    </div>
                    <div class="address">
                        <address class="contact-info d-md-inline-block text-left offset-none">
                        <div class="p unit unit-spacing-xs flex-row align-items-center">
                          <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light mdi mdi-phone text-primary"></span></div>
                          <div class="unit-body"><img class="m-2" src="images/brand/flag-icon-do.png" alt="Bandera de republica dominicana" width="20px"><a class="text-gray-darker" target="_blank" href="https://api.whatsapp.com/send?phone=+18298480470&text=hola,%20qué%20tal?">+1 (829) 4207590 </a></div>
                        </div>
                      </address>
                        <address class="contact-info d-flex text-left">
                        <div class="p unit unit-spacing-xs align-items-center">
                          <div class="unit-left"><span class="icon icon-xs icon-circle icon-gray-light mdi mdi-map-marker text-primary"></span></div>
                            <div class="unit-body textAddress">
                              <a class="text-gray-darker position-relative  hoverAddressConsultorio"  href="#"><strong class=" position-relative">Centro Profesional: </strong>Calle Presidente Gonzalez #4. Ensanche Naco, DO <p class="position-absolute bg-white p-3 showAddressConsultorio">Calle presidente gonzalez, entre calle Luis Lembert <br> y calle Manuel E. Perdomo local N-4, Naco zona metropolitana, DO</p></a><br>
                              <a class="text-gray-darker position-relative  hoverAddressQuirofano"  href="#"><strong class=" position-relative">Centro Quirúrgico:</strong> Calle El Vergel 27, Santo Domingo 10107, DO<p class="position-absolute bg-white p-3 showAddressQuirofano">Calle El Vergel 27, Santo Domingo 10107, DO</p></a>
                            </div>
                        </div>
                      </address>
                    </div>
                </div>
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                    <!--Navbar Brand-->
                    <div class="rd-navbar-brand d-xl-none">
                        <!--Brand-->
                        <a class="brand" href="{{ route('inicio') }}"><img class="brand-logo-dark" src="images/brand/Imagotipo_S&F-NOV_Horizontal.svg" alt="Logo de sinus y face horizontal" width="150" height="52" /><img class="brand-logo-light" src="images/brand/Imagotipo_S&F-NOV_Horizontal.svg" alt="Logo de sinus y face horizontal" width="150" height="52" /></a>
                    </div>
                    <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                </div>
                <div class="rd-navbar-menu-wrap">
                    <div class="rd-navbar-nav-wrap">
                        <div class="rd-navbar-mobile-scroll">
                            <!--Navbar Brand Mobile-->
                            <div class="rd-navbar-mobile-brand">
                                <!--Brand-->
                                <a class="brand" href="{{ route('inicio') }}"><img class="brand-logo-dark" src="images/brand/Imagotipo_S&F-NOV_Horizontal.svg" alt="Logo de sinus y face horizontal" width="150" height="52" /><img class="brand-logo-light" src="images/brand/Imagotipo_S&F-NOV_Horizontal.svg" alt="Logo de sinus y face horizontal" width="150" height="52" /></a>
                            </div>

                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav" id="rd-navbar-nav">
                              <div class=" position-absolute logoNav ">
                                <img src="images/brand/Isotipo+logotipo-Iniciales_Horizontal_Blanco.svg" alt="Logo de sinus y face, nav" class="imgLogoNav">
                              </div>
                                <li class="rd-nav-item {{ setActive('inicio', 'active') }}"><a class="rd-nav-link" href="{{ route('inicio') }}">Inicio</a>
                                </li>
                                <li class="rd-nav-item {{ setActive('doctores', 'active') }}"><a class="rd-nav-link" href="{{ route('doctores') }}">Doctores</a>
                                </li>

                                <li class="rd-nav-item {{ setActive('servicios', 'active') }}"><a class="rd-nav-link" href="{{ route('servicios') }}">Servicios</a>
                                </li>
                                <li class="rd-nav-item {{ setActive('sedes', 'active') }}"><a class="rd-nav-link" href="{{ route('sedes') }}">Sedes</a>
                                </li>
                                <li class="rd-nav-item {{ setActive('alianzas', 'active') }}"><a class="rd-nav-link" href="{{ route('alianzas') }}">Alianzas</a>
                                </li>
                                <li class="rd-nav-item {{ setActive('sobre', 'active') }}"><a class="rd-nav-link" href="{{ route('sobre') }}">Sobre S&F</a>
                                </li>
                                <li class="rd-nav-item {{ setActive('asesoriaonline', 'active') }}"><a class="rd-nav-link" href="{{ route('asesoriaonline') }}">Asesoría Online</a></li>
                                <div class="rd-navbar-item position-absolute top-cita text-white">
                                  <a data-toggle="modal" data-target="#makeAnAppointmentModal" class="btn btn-turquesa btn-sm  pulse" style="height: 60px; text-transform:none;"><strong class="mr-1">¡GRAN INAUGURACIÓN!</strong><br>Marzo 2020</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!--RD Navbar Search-->
                    <div class="rd-navbar-search d-none"><a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-menu-wrap,.rd-navbar-search" rel="nofollow" href="#"><span></span></a>
                        <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.php" data-search-live="rd-search-results-live" method="GET">
                            <div class="form-wrap">
                                <label class="form-label" for="rd-navbar-search-form-input">Escriba y pulsa enter...</label>
                                <input class="rd-navbar-search-form-input form-input form-input-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                            </div>
                            <div class="rd-search-results-live" id="rd-search-results-live"></div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
