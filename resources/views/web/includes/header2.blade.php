 <!-- header-area -->
        <div id="header-fixed-height"></div>
        <header class="header-style-six">
            <div class="heder-top-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="header-top-left">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-location"></i>
Lima - Perú</li>
                                    <li><i class="flaticon-mail"></i><a href="mailto:disaconsultor@gmail.com">disaconsultor@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="header-top-right">
                                <div class="header-contact">
                                    <a href="tel:+51944826577"><i class="flaticon-phone-call"></i>+51 944 826 577</a>
                                </div>
                                <div class="header-social">
                                    <ul class="list-wrap">
                                        <li><a href="https://www.facebook.com/DISAContadoresyabogadosAsociados" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="logo">
                                        <a href="{{url('/')}}"><img src="{{asset('assets/contador/disalogo.jpg')}}" alt="Logo DISA Contadores"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active "><a href="{{url('/')}}">Inicio</a>
                                               
                                            </li>
                                            <li><a href="{{url('/nosotros')}}">Nosotros</a></li>
                                            <li class="menu-item-has-children"><a href="#">Servicios</a>
                                                <ul class="sub-menu">
                                                      
                                                    <li><a href="{{url('/servicios/asesoria-contable')}}">Asesoría Contable</a></li>
                                                    <li><a href="{{url('/servicios/asesoria-legal')}}">Asesoría Legal</a></li>
                                                  
                                                </ul>
                                            </li>
                                           <li><a href="https://www.sunat.gob.pe/" target="_blank">Novedades</a></li>
                                            <li><a href="{{url('/contacto')}}">Contacto</a></li>
                                        </ul>
                                    </div>
                                    <style type="text/css">
                                        
                                            .header-action ul li a {
                                                 color: #fff; 
                                                font-size: 14px;
                                            }
                                    </style>
                                    <div class="header-action d-none d-md-block">
                                        <ul class="list-wrap">
                                            <li ><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li class="header-btn"><a href="https://wa.me/51944826577" target="_blank" class="btnW btn-two">WhatsApp</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="index.html"><img src="{{asset('assets/contador/disalogo.jpg')}}" alt="Logo"></a>
                                    </div>
                                
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <br>
                                       <div class="mobile-search">
                                         <div class="request-btn ">
                                    <a href="https://wa.me/51944826577" target="_blank" class="btnW">Escribir a WhatsApp</a>
                                </div>
                                    <div class="social-links">
                                        <ul class="clearfix list-wrap">
                                            <li><a href="https://www.facebook.com/DISAContadoresyabogadosAsociados" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                           
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- header-search -->
            <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="search-close">
                    <span><i class="fas fa-times"></i></span>
                </div>
                <div class="search-wrap text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="title">... Search Here ...</h2>
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Type keywords here">
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-end -->

        </header>
        <!-- header-area-end -->