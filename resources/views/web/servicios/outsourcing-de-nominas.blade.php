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
DE NÓMINAS</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                       <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">OUTSOURCING
DE NÓMINAS</li>
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
                                    <img src="{{asset('assets/contador/o-nomina.jpg')}}" alt="">
                                </div>
                                <div class="services-details-content">
                                    <h2 class="title">Outsourcing de Nóminas</h2>
                                    <p> Comprende la tercerización mensual del procesamiento de las planillas de remuneraciones de funcionarios, empleados y obreros, asegurando el cumplimiento de la normatividad laboral vigente y con la oportunidad y confiabilidad que el tema requiere. Las principales actividades que se realizan son:</p>
                                  <ul>
                                      <li>  Cálculo y liquidación
de la planilla mensual
e impresión de boletas.</li>
<li>    Elaboración de la interface
para los abonos en las
cuentas de cada trabajador.</li>
<li>    Determinación de los aportes y contribuciones mensuales derivados
de las planillas: AFP´s, SNP, ESSALUD
y 5ta.</li>
<li>    Emisión mensual de los asientos
de planillas y de provisiones.</li>
<li>    Cálculo, procesamiento y
trámite de pago del PDT.</li>
<li>    Preparación de las liquidaciones de beneficios sociales.
Elaboración de los certificados
de 5ta., CTS, certificado de
remuneraciones y retenciones
sobre aportes a las AFP y de
utilidades.</li>
<li>    Preparación de los formularios e
información requeridos por:
Ministerio de Trabajo, EPS y SUNAT.</li>
<li>    Apoyo ante inspecciones
programadas del Ministerio de Trabajo.</li>
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
                                        <p>Tu contabilidad en las
mejores manos</p>
                                        
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