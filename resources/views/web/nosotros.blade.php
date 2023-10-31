@extends('web.layout.app')
@section('header')
@include('web.includes.header2')
@endsection
@section('content')

        <!-- main-area -->
        <main class="fix">

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Sobre Nosotros</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                       <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape-wrap">
                    <img src="assets/img/images/breadcrumb_shape01.png" alt="">
                    <img src="assets/img/images/breadcrumb_shape02.png" alt="">
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- about-area -->
            <section class="about-area-eight pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-9">
                            <div class="about-img-eight">
                                <img src="assets/img/images/inner_about_img03.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content-eight">
                                <div class="section-title-two mb-30">
                                    <span class="sub-title">Sobre Nosotros</span>
                                    <h2 class="title">DISA Contadores y Abogados</h2>
                                </div>
                                <p>DISA es una empresa creada para apoyar a tu micro, pequeña y mediana empresa con los recursos tecnológicos que requieres para proveerte de información contable, tributario, y legal en forma eficiente y oportuna.</p>
                                <p>Nos enorgullece tener una estrecha relación con nuestros clientes. Creemos que la cercanía y confianza son claves para ofrecerte el servicio que necesitas. Es por eso que nos esforzamos por conocer a fondo tu negocio, sus necesidades y desafíos, y trabajar juntos para alcanzar tus metas financieras</p>
                                <p>Contamos con un equipo de profesionales altamente capacitados y experimentados en servicios contables, servicios legales, y asesoría tributaria. Nos aseguramos de mantenernos actualizados en las últimas tendencias y cambios en la ley tributaria para brindarte el mejor servicio posible.</p>
                                <div class="about-content-inner">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-business-presentation"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
Optimizamos</h4>
                                                <p>
Optimizamos tu tiempo guiándote en todo el proceso contable.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-investment"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Errores</h4>
                                                <p>
Evitamos errores contables y así llevar una mejor contabilidad de la empresa.</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="right-slide-img">
                                        <img src="assets/img/images/inner_about_img04.jpg" alt="">
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- choose-area -->
            <section class="choose-area-three">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="choose-content-three">
                                <div class="section-title-two white-title mb-30">
                                    <span class="sub-title">¡CONFÍAEN LOSMEJORES!</span>
                                    <h2 class="title">¿Por qué Disa Contadores y Abogados?</h2>
                                </div>
                                <p>Sentirnos realizados profesionalmente al ver los cambios positivos generados en las empresas gracias a nuestra gestión. Trabajamos para aportar al éxito de nuestros clientes ofreciendo siempre la mejor asesoría contable. Con nosotros podrás:</p>
                                <div class="accordion-wrap-two">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    OUTSOURCING TRIBUTARIO
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Con nuestros servicios de Outsourcing Tributario, Contable y Legal, nuestros clientes podrán contar con el diagnóstico de su situación tributaria y/contable en forma oportuna</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    NUESTROS SERVICIOS
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>El valor agregado de nuestros servicios. sin costo para nuestros clientes, se encuentra en las recomendaciones de Planeamiento Tributario y las capacitaciones In House.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                   NUESTRA EXPERIENCIA
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Nuestra experiencia en los diferentes sectores empresariales, nos permite conocer la problemática de nuestros socios-clientes.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="choose-img-three">
                                <img src="assets/img/images/inner_choose_img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- choose-area-end -->


        

            <!-- brand-area -->
            <div class="brand-area-six pt-80 pb-80">
                <div class="container">
                    <div class="container">
                      <div class="row brand-active">
                        <div class="col-lg-12">
                            <div class="brand-item">
                                <img src="{{asset('assets/contador/cliente-retgas.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="brand-item">
                                <img src="{{asset('assets/contador/cliente-araceli.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="brand-item">
                                <img src="{{asset('assets/contador/cliente-moka.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="brand-item">
                                <img src="{{asset('assets/contador/cliente-ccr.jpg')}}" alt="">
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->


        </main>
        <!-- main-area-end -->



@endsection