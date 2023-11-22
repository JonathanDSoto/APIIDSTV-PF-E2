<!DOCTYPE html>

<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-templat">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://1.envato.market/vuexy_admin">
  <title> WebStore </title>
  

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
  <link rel="icon" type="image/x-icon" href="{{asset('/assets/img/favicon/favicon.ico')}}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/fontawesome.css')}}" />
  <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/tabler-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/flag-icons.css')}}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{asset('/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{asset('/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{asset('/assets/vendor/libs/node-waves/node-waves.css')}}" />
  <link rel="stylesheet" href="{{asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
  <link rel="stylesheet" href="{{asset('/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
  <!-- Vendor -->
  <link rel="stylesheet" href="{{asset('/assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="{{asset('/assets/vendor/css/pages/page-auth.css')}}">

  <!-- Helpers -->
  <script src="{{asset('/assets/vendor/js/helpers.js')}}"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{asset('/assets/vendor/js/template-customizer.js')}}"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{asset('/assets/js/config.js')}}"></script>

</head>

<body>



  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y" style="background-color: #D1C0D3;">
      <div class="authentication-inner py-10">
        <!-- Login -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-3 mt-3" style="background-color: #FCFBF7;">
              <a href="index.html" class="app-brand-link gap-2">
                <img src="{{asset('img/icon.png')}}" alt=  >
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-1 pt-2">Bienvenido a WebStore!📦</h4>
            <p class="mb-4"> Inicia la Aventura</p>

            <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico o Nombre de Usuario</label>
                <input type="text" class="form-control" id="email" name="email-username" placeholder="Ingrese su nombre de usuario o correo electrónico" autofocus>
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Contraseña</label>
                  <a href="auth-forgot-password-basic.html">
                    <small>¿Olvidó su contraseña?</small>
                  </a>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me">
                  <label class="form-check-label" for="remember-me">
                    Recuerdame
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <a href="{{ asset( '/index') }}" class="btn btn-primary d-grid w-100">Inicia Sesión</a>
            </div>
           
            
            </form>

            <p class="text-center">
              <span>Nuevo aqui?</span>
              <a href="auth-register-basic.html">
                <span>Crea nueva cuenta</span>
              </a>
            </p>

          </div>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
  </div>

  <!-- / Content -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="{{asset('/assets/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{asset('/assets/vendor/js/bootstrap.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/hammer/hammer.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/i18n/i18n.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
  <script src="{{asset('/assets/vendor/js/menu.js')}}"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{asset('/assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>

  <!-- Main JS -->
  <script src="{{asset('/assets/js/main.js')}}"></script>


  <!-- Page JS -->
  <script src="{{asset('/assets/js/pages-auth.js')}}"></script>

</body>

</html>

<!-- beautify ignore:end -->