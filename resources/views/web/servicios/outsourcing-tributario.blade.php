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
                                <h2 class="title">OUTSOURCING
TRIBUTARIO</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                       <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">OUTSOURCING
TRIBUTARIO</li>
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


            <!-- services-details-area -->
            <section class="services-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-71 order-0 order-lg-2">
                            <div class="services-details-wrap">
                                <div class="services-details-thumb">
                                    <img src="{{asset('assets/contador/o-tributario.jpg')}}" alt="">
                                </div>
                                <div class="services-details-content">
                                    <h2 class="title">Outsourcing Tributario</h2>
                                    <p> Asistencia permanente y soporte en los aspectos tributarios de la actividad empresarial, desarrollando y proporcionando recomendaciones claras y específicas sobre las operaciones, necesidades y proyectos, orientando a las empresas a la optimización de sus recursos, a la búsqueda de las mejores soluciones y a la prevención de problemas.</p>
                                  <ul>
                                    <li>Planificación, previsión, prevención y aviso de plazos.</li>
<li>Declaraciones tributarias: Sociedades, Renta, IVA, presentación telemática.</li>
<li>Aplazamientos, compensación deudas.</li>
<li>Atención requerimientos, recursos.</li>
<li>Operaciones vinculadas.</li>
<li>Inspecciones fiscales.</li>
                                      
                                  </ul>
                
                                </div>
                            </div>
                        </div>
                        <div class="col-29">
                            <aside class="services-sidebar">
                                <div class="services-widget">
                                    <h4 class="sw-title">Nuestros Servicios</h4>
                                    <div class="services-cat-list">
                                        <ul class="list-wrap">
                                            
                                           <li><a href="{{url('/servicios/asesoria-contable/outsourcing-tributario')}}">Outsourcing Tributario <i class="flaticon-right-arrow"></i></a></li>
                                            <li><a href="{{url('/servicios/asesoria-contable/outsourcing-de-nominas')}}"> Outsourcing de nóminas <i class="flaticon-right-arrow"></i></a></li>
                                            <li><a href="{{url('/servicios/asesoria-contable/outsourcing-contable')}}">Outsourcing Contable <i class="flaticon-right-arrow"></i></a></li>                                         
                                        </ul>
                                    </div>
                                </div>
                                <div class="services-widget">
                                    <h4 class="sw-title">Brochure</h4>
                                    <div class="services-brochure-wrap">
                                        <p>Tu contabilidad en las mejores manos</p>                                        
                                        <a href="{{asset('assets/contador/BROCHURE-DISA-CONTADORES-Y-ABOGADOS.pdf')}}" target="_blank" download class="download-btn"><i class="far fa-file-pdf"></i>PDF. Descargar</a>

                                    </div>
                                </div>
                                <div class="services-widget services-sidebar-contact">
                                    <h4 class="title">Si necesita ayuda, póngase en contacto con nosotros.</h4>
                                    <a href="tel:0123456789"><i class="flaticon-phone-call"></i> +51 944 826 577</a>
                                </div>
                           
                            
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-details-area-end -->

            <!-- brand-area -->
            <div class="brand-area-seven">
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