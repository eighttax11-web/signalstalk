<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignalsTalk</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="{{ route('portfolio.index') }}"><span>SignalsTalk</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{ route('portfolio.index') }}">Inicio</a></li>
                <li><a href="{{ route('posts.index') }}">Blog</a></li>
                <li><a href="#about">Acerca de</a></li>
                <li><a href="#team">Equipo</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Traductor móvil para personas con discapacidad auditiva.</h1>
                <br>
                <div data-aos="fade-up" data-aos-delay="800">
                    <a href="https://play.google.com/store/" class="btn-get-started scrollto">Descargar aplicación</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ URL::asset('assets/img/hero-img (1).jpg') }}" class="img-fluid" alt="" width="404"
                     height="236">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>¿Qué es Signals Talk?</h2>
                <p>Signals Talk es un traductor para personas con discapacidad auditiva, <br>para lograrlo se hace uso
                    de la realidad aumentada y tecnología móvil nativa.</p>
            </div>
        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Comentarios</h2>
                <p>Estos son algunos comentarios destacados sobre nuestra aplicación.</p>
            </div>

            <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <img src="{{ URL::asset('assets/img/testimonials/testimonials-1.jpg') }}"
                             class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Una aplicación muy rápida y funcional.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <img src="{{ URL::asset('assets/img/testimonials/testimonials-2.jpg') }}"
                             class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Signals Talk ha permitido comunicarme con familiares que padecen de discapacidad auditiva.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <img src="{{ URL::asset('assets/img/testimonials/testimonials-3.jpg') }}"
                             class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            La plataforma es muy didáctica y me ha servido mucho en mi entorno.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <img src="{{ URL::asset('assets/img/testimonials/testimonials-4.jpg') }}"
                             class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Me sorprende lo rápida que es, me ha servido en mi trabajo como docente al tener un alumno
                            con discapacidad auditiva.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <img src="{{ URL::asset('assets/img/testimonials/testimonials-5.jpg') }}"
                             class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Hasta el momento todo bien, espero que el equipo de Signals Talk siga haciendo mejoras.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Equipo de desarrollo</h2>
                <p>Desarrolladores de software a cargo de Signals Talk.</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ URL::asset('assets/img/cristian.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Cristian López Ramirez</h4>
                            <span>Programador</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ URL::asset('assets/img/abraham.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Abraham Rojas Montero</h4>
                            <span>Programador y Diseñador</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ URL::asset('assets/img/alberto.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Jose Alberto Mendoza Montañez</h4>
                            <span>Programador</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ URL::asset('assets/img/melissa.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Melissa Rodriguez Arellano</h4>
                            <span>Arquitecta de software</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ URL::asset('assets/img/eduardo.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Eduardo Hernández Reyes</h4>
                            <span>Arquitecto de software</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Contacto</h2>
            </div>

            <div class="row">

                <div class="col-lg-5 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="info">
                        <div>
                            <i class="ri-map-pin-line"></i>
                            <p>Av. Universidad No.350,<br> Carretera Federal Cuitláhuac-La Tinaja,<br> Localidad Dos
                                Caminos C.P. 94910 Cuitláhuac, Veracruz. </p>
                        </div>

                        <div>
                            <i class="ri-mail-send-line"></i>
                            <p>signalstalk@signalstalk.com</p>
                        </div>

                        <div>
                            <i class="ri-phone-line"></i>
                            <p>+271 076 22 44</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <form action="{{ route('portfolio.contact') }}" method="POST" role="form" class="php-email-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="Correo electrónico" data-rule="email"
                                   data-msg="Please enter a valid email"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto"
                                   data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="msg" rows="5" data-rule="required"
                                      data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                            <div class="validate"></div>
                        </div>
                        @if(session('info'))
                            <div class="mb-3">
                                <div class="sent-message">{{ session('info') }}</div>
                            </div>
                        @endif
                        <div class="text-center">
                            <button type="submit">Enviar mensaje</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 text-lg-left text-center">
                <div class="copyright">
                    &copy; Copyright <strong>SignalsTalk</strong>. Todos los derechos reservados
                </div>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/aos/aos.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ URL::asset('assets/js/main.js') }}"></script>

</body>
</html>
