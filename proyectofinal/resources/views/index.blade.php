@extends('layouts.layout')
@section('content')

    <h2>
        <!DOCTYPE html>

        <!-- =========================================================
            * Vuexy - Bootstrap Admin Template | v9.0.0
            ==============================================================
            
            * Product Page: https://1.envato.market/vuexy_admin
            * Created by: Pixinvent
            * License: You must have a valid license purchased in order to legally use the theme for your project.
            * Copyright Pixinvent (https://pixinvent.com)
            
            =========================================================
             -->
        <!-- beautify ignore:start -->
            
            
            <html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
            
              <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
            
                <title>index </title>
            
                
                <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
                <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
                <!-- Canonical SEO -->
                <link rel="canonical" href="https://1.envato.market/vuexy_admin">
                
                
                <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
                <script>
                    (function(w, d, s, l, i) {
                        w[l] = w[l] || [];
                        w[l].push({
                            'gtm.start': new Date().getTime(),
                            event: 'gtm.js'
                        });
                        var f = d.getElementsByTagName(s)[0],
                            j = d.createElement(s),
                            dl = l != 'dataLayer' ? '&l=' + l : '';
                        j.async = true;
                        j.src =
                            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                        f.parentNode.insertBefore(j, f);
                    })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
                </script>
                <!-- End Google Tag Manager -->
                
                <!-- Favicon -->
                <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />
            
                <!-- Fonts -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">
            
                <!-- Icons -->
                <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
                <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css"/>
                <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />
            
                <!-- Core CSS -->
                <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
                <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
                <link rel="stylesheet" href="../../assets/css/demo.css" />
                
                <!-- Vendors CSS -->
                <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
                <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
                <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
                <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />
            
                <!-- Page CSS -->
                <link rel="stylesheet" href="../../assets/vendor/css/pages/ui-carousel.css" />
            
                <!-- Helpers -->
                <script src="../../assets/vendor/js/helpers.js"></script>
                <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
                <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
                <script src="../../assets/vendor/js/template-customizer.js"></script>
                <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
                <script src="../../assets/js/config.js"></script>
                
            </head>
            
            <body>
      
                  <!-- Content wrapper -->
                  <div class="content-wrapper">
            
                    <!-- Content -->
                    
                      <div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="row">
              <!-- Bootstrap carousel -->
              <div class="col-md">
                <h5 class="my-4"></h5>
            
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="../../assets/img/backgrounds/mauseVertical.jpg" alt="" />
                      <div class="carousel-caption d-none d-md-block">
                        <p style="color: blue;"> </p>
                           
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="../../assets/img/backgrounds/soporteTv.jpg" alt="" />
                      <div class="carousel-caption d-none d-md-block style="padding-top: 150px;">
                        <p style="color: black;">soporte para monitores.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="../../assets/img/backgrounds/hubUsb.jpg" alt="" />
                      <div class="carousel-caption d-none d-md-block style="padding-top: 50px;">
                        <p style="color: green;"> Ugreen Hub usb c.</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                    <span cThlass="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </a>
                </div>
              </div>
              <!-- Bootstrap crossfade carousel -->
              <div class="col-md">
                <h5 class="my-6"></h5>
            
                <div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
                  </ol>
                 <div class="carousel-item active" style="position:absolute;">
                    <img class="d-block w-100" style="object-fit: cover; margin-top: 50px; margin-bottom: auto;" src="../../assets/img/backgrounds/impresoraHp.jpg" alt="" />
                    <div class="carousel-caption d-none d-md-block" style="position:relative; bottom: 0; width: 50% ;">
                        <p style="color: rgb(87, 39, 176);">Conexion wifi.</p>
                    </div>
                </div>
                
                
                    
                    <div class="carousel-item">
                      <img class="d-block w-100" src="../../assets/img/backgrounds/ecotank.jpg" alt="Second slide" />
                      <div class="carousel-caption d-none d-md-block style="position:relative; bottom: 100; width: 50% ;">
                        <p>Impresora EPSON.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="../../assets/img/backgrounds/impresoraCannon.jpg" alt="Third slide" />
                      <div class="carousel-caption d-none d-md-block style=" style="position:relative; bottom: 0; width: 50%"" ;>
                        <p>La mas rendidora.</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </a>
                </div>
              </div>
            </div>
            
            <hr class="container-m-nx mt-5" />
            
            <h5 class="my-4">Swiper</h5>
            <div class="row">
              <!-- Default -->
              <div class="col-md-6 mb-4">
                <h6 class="text-muted mt-3">Default</h6>
                <div class="swiper" id="swiper-default">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/asusGamer.jpg)">Slide 1</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/huaweiMatebook.jpg)">Slide 2</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/hpProbook.jpg)">Slide 3</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/apple.jpg)">Slide 4</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/asusChromebook.jpg);background-size: 80% 100%;">Slide 5</div>
                  </div>
                </div>
              </div>
              <!-- With arrows -->
              <div class="col-md-6 mb-4">
                <h6 class="text-muted mt-3">With arrows</h6>
                <div class="swiper" id="swiper-with-arrows">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/peladn.jpg);background-size: 105% 100%;">Slide 1</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/gamer.jpg);background-size: 80% 100%;">Slide 2</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/asus.webp);background-size: 80% 100%;">Slide 3</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/imac.jpg);background-size: 80% 100%;">Slide 4</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/dell.jpg);background-size: 80% 100%;">Slide 5</div>
                  </div>
                  <div class="swiper-button-next swiper-button-white custom-icon">
                  </div>
                  <div class="swiper-button-prev swiper-button-white custom-icon">
                  </div>
                </div>
              </div>
              <!-- With pagination -->
              <div class="col-md-6 mb-4">
                <h6 class="text-muted mt-3">AUDIO</h6>
                <div class="swiper" id="swiper-with-pagination">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/GL3.webp)">Slide 1</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/home.webp)">Slide 2</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/ATH.webp)">Slide 3</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/AT.webp)">Slide 4</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/TC.webp)">Slide 5</div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            
              <!-- With progress -->
              <div class="col-md-6 mb-4">
                <h6 class="text-muted mt-3">TELEFONOS+</h6>
                <div class="swiper" id="swiper-with-progress">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url(../../assets/img/backgrounds/watch.png)">Software </div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/xiaomi.webp)">Slide 2</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/samsung23.webp)">Slide 3</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/iphone15.jpg)">Slide 4</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/huawei60p.webp)">Slide 5</div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-next swiper-button-white custom-icon"></div>
                  <div class="swiper-button-prev swiper-button-white custom-icon"></div>
                </div>
              </div>
            
              <h6 class="text-muted mt-3">SOFTWARE</h6>
              <div id="swiper-gallery">
                <div class="swiper gallery-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url(../../assets/img/backgrounds/Corei3.jpg);background-size: 100% 100%;">Software </div>
                        <div class="swiper-slide" style="background-image: url(../../assets/img/backgrounds/Corei7.jpg);background-size: 100% 100%;">Corei7</div>
                        <div class="swiper-slide" style="background-image: url(../../assets/img/backgrounds/Raizen9.jpg);background-size: 100% 100%;">Raizen9</div>
                        <div class="swiper-slide" style="background-image: url(../../assets/img/backgrounds/Corei9.jpg);background-size: 100% 100%;">Corei9</div>
                        <div class="swiper-slide" style="background-image: url(../../assets/img/backgrounds/Raizen7.jpg);background-size: 100% 100%;"> Raizen7</div>
                    </div>
                    



              <!-- With scrollbar -->
              <div class="col-md-6 mb-4">
                <h6 class="text-muted mt-3">With scrollbar</h6>
                <div class="swiper" id="swiper-with-scrollbar">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/micro.webp)">Slide 1</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/elements/5.jpg)">Slide 2</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/elements/9.jpg)">Slide 3</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/elements/7.jpg)">Slide 4</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/elements/8.jpg)">Slide 5</div>
                  </div>
                  <div class="swiper-scrollbar"></div>
                </div>
              </div>
            
            
              <!-- 3D flip effect -->
              <div class="col-md-6 mb-4">
                <h6 class="text-muted mt-3">3D flip effect</h6>
                <div class="swiper" id="swiper-3d-flip-effect">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/micro.webp)">Slide 1</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/elements/13.jpg)">Slide 2</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/elements/15.jpg)">Slide 3</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/elements/7.jpg)">Slide 4</div>
                    <div class="swiper-slide" style="background-image:url(../../assets/img/elements/10.jpg)">Slide 5</div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-next swiper-button-black custom-icon">
                  </div>
                  <div class="swiper-button-prev swiper-button-black custom-icon">
                  </div>
                </div>
              </div>
            
              <!-- Gallery effect-->
              <div class="col-12">

                  <div class="swiper gallery-thumbs">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/micro.webp)">Slide 1</div>
                      <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/1.jpg)">Slide 2</div>
                      <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/3.jpg)">Slide 3</div>
                      <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/4.jpg)">Slide 4</div>
                      <div class="swiper-slide" style="background-image:url(../../assets/img/backgrounds/6.jpg)">Slide 5</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
                      <!-- / Content -->

                      
                      <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                  </div>
                  <!-- / Layout page -->
                </div>
              
              <!-- endbuild -->
            
              <!-- Vendors JS -->
              <script src="../../assets/vendor/libs/swiper/swiper.js"></script>
            
              <!-- Main JS -->
              <script src="../../assets/js/main.js"></script>
              
            
              <!-- Page JS -->
              <script src="../../assets/js/ui-carousel.js"></script>
              
            </body>
            
            </html>
            
            <!-- beautify ignore:end -->


    </h2>


@stop
