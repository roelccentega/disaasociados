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
                                <h2 class="title">Asesoría Contable</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Asesoría Contable</li>
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
            <section class="services-area services-bg" data-background="{{asset('assets/img/bg/services_bg.jpg')}}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title white-title mb-50 tg-heading-subheading animation-style2">
                                <span class="sub-title tg-element-title">Contabilidad</span>
                                <h2 class="title tg-element-title">Asesoría Contable</h2>
                                <p>Velamos por el cumplimiento de todas las obligaciones legales en materia contable y proporcionamos información permanentemente actualizada sobre la situación de la compañía.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="view-all-btn text-end mb-30">
                                <a href="https://wa.me/51944826577" target="_blank" class="btn">Obtener Servicios</a>
                            </div>
                        </div>
                    </div>
                    <div class="row services-active">
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-content">
                                    <div class="content-top">
                                        <div class="icon">
                                            <i class="flaticon-briefcase"></i>
                                        </div>
                                        <h2 class="title">OUTSOURCING
TRIBUTARIO</h2>
                                    </div>
                                    <div class="services-thumb">
                                        <img src="{{asset('assets/contador/ico-o-tributario.jpg')}}" alt="">
                                        <a href="{{url('/servicios/asesoria-contable/outsourcing-tributario')}}" class="btn transparent-btn">Ver servicio</a>
                                    </div>
                                    <p>Revisión de Impuestos Mensuales (Cumplimiento Tributario)</p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-content">
                                    <div class="content-top">
                                        <div class="icon">
                                            <i class="flaticon-taxes"></i>
                                        </div>
                                        <h2 class="title">OUTSOURCING
DE NÓMINAS</h2>
                                    </div>
                                    <div class="services-thumb">
                                        <img src="{{asset('assets/contador/ico-o-nomina.jpg')}}" alt="">
                                        <a href="{{url('/servicios/asesoria-contable/outsourcing-de-nominas')}}" class="btn transparent-btn">Ver servicio</a>
                                    </div>
                                    <p> Proporcionamos servicios que ayudan a gestionar y agilizar los procesos operativos de Recursos Humanos relacionados a remuneraciones, nóminas</p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-content">
                                    <div class="content-top">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <h2 class="title">OUTSOURCING
CONTABLE</h2>
                                    </div>
                                    <div class="services-thumb">
                                        <img src="{{asset('assets/contador/ico-o-contable.jpg')}}" alt="">
                                        <a href="{{url('/servicios/asesoria-contable/outsourcing-contable')}}" class="btn transparent-btn">Ver servicio</a>
                                    </div>
                                     <p>Outsourcing Contable y de Planillas.</p>
                                  
                                </div>
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