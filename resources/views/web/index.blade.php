@extends('web.layout.app')

@section('header')
@include('web.includes.header')
@endsection
@section('content')

     <!-- main-area -->
        <main class="fix">

            <!-- slider-area -->
            <section class="slider-area">
                <div class="slider-active">
                    <div class="single-slider slider-bg" data-background="assets/img/banner/banner_bg.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="slider-content">
                                        <span class="sub-title" data-animation="fadeInUp" data-delay=".2s">Somos Expertos</span>
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".4s">ASESORÍA
EMPRESARIAL,
CONTABLE,
FINANCIERA
Y LEGAL</h2>
                                        <!-- <p data-animation="fadeInUp" data-delay=".6s">Agilos helps you to convert your data into a strategic asset and get top-notch business insights.</p> -->
                                        <a href="{{url('/servicios/asesoria-contables')}}" class="btn" data-animation="fadeInUp" data-delay=".8s"> Nuestros Servicios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--     <div class="slider-shape">
                            <img src="assets/img/banner/banner_shape.png" alt="" data-animation="zoomIn" data-delay=".8s">
                        </div> -->
                    </div>
                 <!--    <div class="single-slider slider-bg" data-background="assets/img/banner/banner_bg02.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="slider-content">
                                        <span class="sub-title" data-animation="fadeInUp" data-delay=".2s">We Are Expert In This Field</span>
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".4s">Grow Your Business More Efficiently</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Agilos helps you to convert your data into a strategic asset and get top-notch business insights.</p>
                                        <a href="services.html" class="btn" data-animation="fadeInUp" data-delay=".8s">Ver servicio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-shape">
                            <img src="assets/img/banner/banner_shape.png" alt="" data-animation="zoomIn" data-delay=".8s">
                        </div>
                    </div> -->
                </div>
            </section>
            <!-- slider-area-end -->

            <!-- about-area -->
            <section class="about-area about-bg" data-background="assets/img/bg/about_bg.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="about-img-wrap">
                                <img src="assets/contador/circulo.png" alt="" class="main-img">
                                <img src="assets/img/images/about_img_shape01.png" alt="">
                                <img src="assets/img/images/about_img_shape02.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="about-content">
                                <div class="section-title mb-25 tg-heading-subheading animation-style2">
                                    <span class="sub-title tg-element-title">Asesorías Tributarias y Contables</span>
                                    <h2 class="title tg-element-title">DISA Contadores y Abogados</h2>
                                </div>
                                <p>DISA es una empresa creada para apoyar a tu micro, pequeña y mediana empresa con los recursos tecnológicos que requieres para proveerte de información contable, tributario, y legal en forma eficiente y oportuna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- features-area -->
            <section class="features-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="features-item">
                                <div class="features-content">
                                    <div class="content-top">
                                        <div class="icon">
                                            <i class="flaticon-puzzle-piece"></i>
                                        </div>
                                        <h2 class="title">Servicios de calidad</h2>
                                    </div>
                                    <p>DISA optimiza tu contabildad con nosotros hoy mismo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features-item">
                                <div class="features-content">
                                    <div class="content-top">
                                        <div class="icon">
                                            <i class="flaticon-inspiration"></i>
                                        </div>
                                        <h2 class="title">
Ideas de innovación</h2>
                                    </div>
                                    <p>Nuestra experiencia nos ha llevado a trabajar con empresas de primer nivel</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features-item">
                                <div class="features-content">
                                    <div class="content-top">
                                        <div class="icon">
                                            <i class="flaticon-profit"></i>
                                        </div>
                                        <h2 class="title">
El crecimiento del negocio</h2>
                                    </div>
                                    <p>Ayudamos a cumplir exitosamente lo exigido por la normativa tributaria</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area-end -->

            <!-- about-area -->
            <section class="about-area-two pt-110 pb-120">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-7 col-md-9 order-0 order-lg-2">
                            <div class="about-img-two">
                                <div class="main-img">
                                    <img src="assets/contador/expertos2.jpg" alt="" >
                                   <!--  <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="play-btn popup-video"><i class="fas fa-play"></i></a> -->
                                </div>
                                <img src="assets/contador/experto1.jpg" alt="" width="320px">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about-content-two">
                                <div class="section-title mb-30 tg-heading-subheading animation-style2">
                                    <span class="sub-title tg-element-title">Disa Contadores y Abogados</span>
                                    <h2 class="title tg-element-title">Confia en los Expertos</h2>
                                </div>
                                <p>Profesionales de excelencia se encuentran a cargo de liderar, administrar, planificar, coordinar y controlar, en forma eficiente y oportuna, la gestión de los procesos de todos nuestros clientes; velando por el cumplimiento de la normativa administrativa y legal vigente.</p>
                                <div class="about-list">
                                    <ul class="list-wrap">
                                        <li><img src="assets/img/icons/check_icon.svg" alt="">100% Mejores Resultados</li>
                                        <li><img src="assets/img/icons/check_icon.svg" alt="">Ideas Valiosas</li>
                                        
                                        <li><img src="assets/img/icons/check_icon.svg" alt="">Clientes Felices</li>
                                    </ul>
                                </div>
                                <div class="success-wrap">
                                    <ul class="list-wrap">
                                       
                                        <li>
                                            <h2 class="count">90%</h2>
                                            <p>Obtén un Mejor control </p>
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{url('/contacto')}}" class="btn transparent-btn">Comience con Nosotros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-shape-wrap">
                    <img src="assets/img/images/about_shape01.png" alt="">
                    <img src="assets/img/images/about_shape02.png" alt="">
                </div>
            </section>
            <!-- about-area-end -->

            <!-- services-area -->
            <section class="services-area services-bg" data-background="assets/img/bg/services_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title white-title mb-50 tg-heading-subheading animation-style2">
                                <span class="sub-title tg-element-title">Contabilidad</span>
                                <h2 class="title tg-element-title">Asesoría Contable</h2>
                                <p>Servicios contables para empresas, pymes</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="view-all-btn text-end mb-30">
                                <a href="{{url('/servicios/asesoria-contable')}}" class="btn">Ver todos los Servicios</a>
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
                                        <img src="assets/contador/ico-o-tributario.jpg" alt="">
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
                                        <img src="assets/contador/ico-o-nomina.jpg" alt="">
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
                                        <img src="assets/contador/ico-o-contable.jpg" alt="">
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
   <!-- services-area legal -->
            <section class="services-area-two services-bg-two" data-background="assets/img/bg/services_bg02.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="section-title-two mb-60 tg-heading-subheading animation-style3">
                                <span class="sub-title">Servicios</span>
                                <h2 class="title tg-element-title">Asesoría Legal</h2>
                                 <p style="margin:15px 0px">Servicios contables para empresas, pymes, así como asociaciones cooperativas</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="view-all-btn text-end mb-30">
                                <a href="{{url('/servicios/asesoria-legal')}}" class="btn">Ver todos los Servicios</a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="services-item-two">
                                <div class="services-thumb-two">
                                    <img src="assets/contador/familia.jpg" alt="">
                                    <div class="item-shape">
                                        <img src="assets/img/services/services_item_shape.png" alt="">
                                    </div>
                                </div>
                                <div class="services-content-two">
                                    <div class="icon">
                                        <i class="flaticon-piggy-bank"></i>
                                    </div>
                                    <h2 class="title"><a href="https://wa.me/51944826577?text=Hola%20estoy%20interesado%20el%20servicio%20DERECHO DE FAMILIA">DERECHO
DE FAMILIA</a></h2>
                                    <p>Servicios contables para empresas, pymes, así como asociaciones cooperativas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="services-item-two">
                                <div class="services-thumb-two">
                                    <img src="assets/contador/sucesiones.jpg" alt="">
                                    <div class="item-shape">
                                        <img src="assets/img/services/services_item_shape.png" alt="">
                                    </div>
                                </div>
                                <div class="services-content-two">
                                    <div class="icon">
                                        <i class="flaticon-calculator"></i>
                                    </div>
                                    <h2 class="title"><a href="https://wa.me/51944826577?text=Hola%20estoy%20interesado%20el%20servicio%20DERECHO
DE SUCESIONES">DERECHO
DE SUCESIONES</a></h2>
                                   <p>Servicios contables para empresas, pymes, así como asociaciones cooperativas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="services-item-two">
                                <div class="services-thumb-two">
                                    <img src="assets/contador/personas.jpg" alt="">
                                    <div class="item-shape">
                                        <img src="assets/img/services/services_item_shape.png" alt="">
                                    </div>
                                </div>
                                <div class="services-content-two">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <h2 class="title"><a href="https://wa.me/51944826577?text=Hola%20estoy%20interesado%20el%20servicio%20DERECHO DE FAMILIA">DERECHO
DE PERSONAS</a></h2>
                                    <p>Servicios contables para empresas, pymes, así como asociaciones cooperativas</p>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- services-area-end -->
  


            <!-- faq-area -->
            <section class="faq-area">
                <div class="faq-bg-shape" data-background="assets/img/images/faq_shape01.png"></div>
                <div class="faq-shape-wrap">
                    <img src="assets/img/images/faq_shape02.png" alt="">
                    <img src="assets/img/images/faq_shape03.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-end justify-content-center">
                        <div class="col-lg-6 col-md-9">
                            <div class="faq-img-wrap">
                                <img src="{{asset('assets/contador/contador.jpg')}}" alt="">
                                <img src="assets/img/images/faq_img02.jpg" alt="" data-parallax='{"y" : 100 }'>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-content">
                                <div class="section-title mb-30 tg-heading-subheading animation-style2">
                                    <span class="sub-title tg-element-title">¡CONFÍA
EN LOS
MEJORES!</span>
                                    <h2 class="title tg-element-title">¿Qué es lo que nos motiva?</h2>
                                </div>
                                <p>Sentirnos realizados profesionalmente al ver los cambios positivos generados en las empresas gracias a nuestra gestión. Trabajamos para aportar al éxito de nuestros clientes ofreciendo siempre la mejor asesoría contable. Con nosotros podrás:</p>
                                <div class="accordion-wrap">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                   NUESTRA EXPERIENCIA
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Nuestra experiencia en los diferentes sectores empresariales, nos permite conocer la problemática de nuestros socios-clientes.</p>
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
                                                
PROFESIONALES
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Nuestra firma cuenta con profesionales expertos de distintas profesiones, tales como abogados tributaristas, contadores y especialistas en precios de transferencia. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq-area-end -->

            <!-- request-area -->
            <section class="request-area request-bg" data-background="assets/img/bg/request_bg.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="request-content tg-heading-subheading animation-style2">
                                <h2 class="title tg-element-title">Consulta gratis sobre nuestros servicios contables y legales</h2>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="request-content-right">
                                <div class="request-contact">
                                    <div class="icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="content">
                                        <span>
                                        Lunes a Viernes</span>
                                        <a href="tel:51944826577">+51 944 826 577</a>
                                    </div>
                                </div>
                                <div class="request-btn">
                                    <a href="{{url('/contacto')}}" class="btn">Enviar Mensaje</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="request-shape">
                    <img src="assets/img/images/request_shape.png" alt="">
                </div>
            </section>
            <!-- request-area-end -->

           

            <!-- pricing-area -->
     
            <!-- pricing-area-end -->
 <style>
        .alert-project{
            background:#20CA25;
            color:#fff;
        }

    </style>
            <!-- contact-area -->
            <section class="contact-area contact-bg" data-background="assets/img/bg/contact_bg.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="contact-content">
                                <div class="section-title mb-30 tg-heading-subheading animation-style2">
                                    <span class="sub-title tg-element-title">
Ponerse en contacto</span>
                                    <h2 class="title tg-element-title">¿Te gustaría contar con una asesoría contable que no te haga perder tiempo?</h2>
                                </div>
                                <p>Consigue la información financiera necesaria para tomar mejores decisiones</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-form">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" placeholder="Nombre Completo*" name="name" id="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="email" placeholder="E-mail *" name="email" id="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" placeholder="Teléfono *" name="phone" id="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" placeholder="Asunto *" name="subject" id="subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <textarea placeholder="Comments *" name="content" id="content"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                      <br>
                                                  <br>
                        <div class="campo pad-rpt">
                                <div id="respuesta"></div>
                        </div>  
                                    <button id="submit"  type="submit">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-shape">
                    <img src="assets/img/images/contact_shape.png" alt="">
                </div>
            </section>
            <!-- contact-area-end -->
<style type="text/css">
  
  .blog-post-area{

    padding: 20px 0 90px;
  }
</style>
            <!-- blog-post-area -->
            <section class="blog-post-area">
                
            </section>
            <!-- blog-post-area-end -->

            <!-- brand-area -->
            <div class="brand-aera pb-100">
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