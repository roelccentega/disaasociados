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
                                <h2 class="title">Contáctenos</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

            <!-- contact-area -->
            <section class="inner-contact-area pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="inner-contact-img">
                                <img src="assets/img/images/contact_img.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inner-contact-info">
                                <h2 class="title">Nuestra dirección de oficina</h2>
                                <div class="contact-info-item">
                                    <h5 class="title-two">Oficina Lima</h5>
                                    <ul class="list-wrap">
                                        <li>Jirón Puno 190 - Carabayllo</li>
                                        <li>986353797 / 959711127</li>
                                        <li>disaconsultor@gmail.com</li>
                                    </ul>
                                </div>
                             <!--    <div class="contact-info-item">
                                    <h5 class="title-two">Australia Office</h5>
                                    <ul class="list-wrap">
                                        <li>100 Wilshire Blvd, Suite 700 Santa <br> Monica, CA 90401, USA</li>
                                        <li>+1 (310) 620-8565</li>
                                        <li>info@gmail.com</li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->


            <!-- contact-map -->
            <div class="contact-map">
               <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.332792000835!2d144.96011341744386!3d-37.805673299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1685027435635!5m2!1sen!2sbd" allowfullscreen loading="lazy"></iframe> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5682.994079969182!2d-77.02733090467046!3d-11.899152158695994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d08e73b4483f%3A0xac995745206d022!2sJiron%20Puno%20190%2C%20Carabayllo%2015321!5e0!3m2!1ses!2spe!4v1694631739772!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- contact-map-end -->


        </main>
        <!-- main-area-end -->

@endsection