@extends('web.layout.app')
@section('header')
@include('web.includes.header2')
@endsection
@section('content')

  <!-- main-area -->
        <main class="fix">

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('assets/img/bg/breadcrumb_bg.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Asesoría Legal</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Asesoría Legal</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape-wrap">
                    <img src="{{asset('assets/img/images/breadcrumb_shape01.png')}}" alt="">
                    <img src="{{asset('assets/img/images/breadcrumb_shape02.png')}}" alt="">
                </div>
            </section>
            <!-- breadcrumb-area-end -->


            <!-- services-area -->
            <section class="services-area-six">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title-two mb-60">
                                <span class="sub-title">Asesoría Legal</span>
                                <h2 class="title">Asesoría Legal</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-top-content mb-30">
                                <!-- <p>ABOGADOS - ÁRBITROS Y EXPERTOS EN SOLUCIÓN DE CONFLICTOS</p> -->
                                <p>Los servicios de nuestro departamento jurídico incluyen el asesoramiento en los ámbitos mercantil y civil.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="services-item-two">
                                <div class="services-thumb-two">
                                    <img src="{{asset('assets/img/services/h2_services_img01.jpg')}}" alt="">
                                    <div class="item-shape">
                                        <img src="assets/img/services/services_item_shape.png" alt="">
                                    </div>
                                </div>
                                <div class="services-content-two">
                                    <div class="icon">
                                        <i class="flaticon-piggy-bank"></i>
                                    </div>
                                    <h2 class="title"><a href="https://wa.me/51944826577?text=Hola%20estoy%20interesado%20el%20servicio%20DERECHO DE FAMILIA" target="_blank">DERECHO
DE FAMILIA</a></h2>
                                    <p>Pensión de alimentos, Divorcios, Tenencia de menor, Regímenes de visitas, Violencia contra la mujer, Unión de hecho.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="services-item-two">
                                <div class="services-thumb-two">
                                    <img src="{{asset('assets/img/services/h2_services_img02.jpg')}}" alt="">
                                    <div class="item-shape">
                                        <img src="assets/img/services/services_item_shape.png" alt="">
                                    </div>
                                </div>
                                <div class="services-content-two">
                                    <div class="icon">
                                        <i class="flaticon-calculator"></i>
                                    </div>
                                    <h2 class="title"><a href="https://wa.me/51944826577?text=Hola%20estoy%20interesado%20el%20servicio%20DERECHO
DE SUCESIONES" target="_blank">DERECHO
DE SUCESIONES</a></h2>
                                    <p>Sucesión intestada, Testamento, Petición de herencia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="services-item-two">
                                <div class="services-thumb-two">
                                    <img src="{{asset('assets/img/services/h2_services_img03.jpg')}}" alt="">
                                    <div class="item-shape">
                                        <img src="assets/img/services/services_item_shape.png" alt="">
                                    </div>
                                </div>
                                <div class="services-content-two">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <h2 class="title"><a href="https://wa.me/51944826577?text=Hola%20estoy%20interesado%20el%20servicio%20DERECHO DE FAMILIA" target="_blank">DERECHO DE FAMILIA</a></h2>
                                    <p>Rectificación de partidas</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- services-area-end -->

            <!-- brand-area -->
            <div class="brand-area-six pt-80 pb-80">
                <div class="container">
                    <div class="container">
                    <div class="row brand-active">
                        <div class="col-lg-12">
                            <div class="brand-item">
                                <img src="assets/contador/cliente-retgas.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="brand-item">
                                <img src="assets/contador/cliente-araceli.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="brand-item">
                                <img src="assets/contador/cliente-moka.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="brand-item">
                                <img src="assets/contador/cliente-ccr.jpg" alt="">
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->


        </main>
        <!-- main-area-end -->


@endsection