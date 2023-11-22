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
        
            <title>Cards Analytics- UI elements | Vuexy - Bootstrap Admin Template</title>
        
            
            <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
            <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
            <!-- Canonical SEO -->
            <link rel="canonical" href="https://1.envato.market/vuexy_admin">
            
            
            <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
              })(window,document,'script','dataLayer','GTM-5J3LMKC');</script>
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
            <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />
        
            <!-- Page CSS -->
            
        <link rel="stylesheet" href="../../assets/vendor/css/pages/app-logistics-dashboard.css" />
        
            <!-- Helpers -->
            <script src="../../assets/vendor/js/helpers.js"></script>
            <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
            <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
            <script src="../../assets/vendor/js/template-customizer.js"></script>
            <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
            <script src="../../assets/js/config.js"></script>
            
        </head>
        
        <body>
        
          
          <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
          <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
          <!-- End Google Tag Manager (noscript) -->
          
          <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar  ">
          <div class="layout-container">
        
            
            
        
        
        
        
        <!-- Menu -->
        
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        
          
          <div class="app-brand demo ">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
        <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
          <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
          <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
        </svg>
        </span>
              <span class="app-brand-text demo menu-text fw-bold">cupones</span>
            </a>
        
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
          </div>
                
                    
               
        
            
           
        
            
        
            <!-- Descuentos -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Descuentos</span>
            </li>
            
          
        
        </aside>
        <!-- / Menu -->
        
            
        
            <!-- Layout container -->
            <div class="layout-page">
              
              
        
        
        
        <!-- Navbar -->
        
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          
        
              
              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                  <i class="ti ti-menu-2 ti-sm"></i>
                </a>
              </div>
              
        
              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        
                
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                  <div class="nav-item navbar-search-wrapper mb-0">
                    <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                      <i class="ti ti-search ti-md me-2"></i>
                      <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                    </a>
                  </div>
                </div>
                <!-- /Search -->
                
                
        
                
        
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                  
                  
                  
                  
                  <!-- Style Switcher -->
                  <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <i class='ti ti-md'></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                      
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                          <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- / Style Switcher-->
                  
                 
            
        
                 
        
                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online">
                        <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle">
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <span class="fw-medium d-block">John Doe</span>
                              <small class="text-muted">Admin</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages-profile-user.html">
                          <i class="ti ti-user-check me-2 ti-sm"></i>
                          <span class="align-middle">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                          <i class="ti ti-settings me-2 ti-sm"></i>
                          <span class="align-middle">Settings</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages-account-settings-billing.html">
                          <span class="d-flex align-items-center align-middle">
                            <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                            <span class="flex-grow-1 align-middle">Billing</span>
                            <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                          </span>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages-faq.html">
                          <i class="ti ti-help me-2 ti-sm"></i>
                          <span class="align-middle">FAQ</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages-pricing.html">
                          <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                          <span class="align-middle">Pricing</span>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                          <i class="ti ti-logout me-2 ti-sm"></i>
                          <span class="align-middle">Log Out</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!--/ User -->
                  
        
        
                </ul>
              </div>
        
              
              <!-- Search Small Screens -->
              <div class="navbar-search-wrapper search-input-wrapper  d-none">
                <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
                <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
              </div>
              
              
          
        </nav>
        
        <!-- / Navbar -->
        
              
        
              <!-- Content wrapper -->
              <div class="content-wrapper">
        
                <!-- Content -->
                
                  <div class="container-xxl flex-grow-1 container-p-y">
                    
                    
        
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Descuentos</span> 
        </h4>
        <div class="row">
          <!-- Earning Reports -->
          <div class="col-lg-6 mb-4 order-md-0 order-lg-0">
            <div class="card h-100">
              <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
                <div class="card-title mb-0">
                  <h5 class="mb-3">Consumos</h5>
                  <small class="text-muted">Consumo Semanal</small>
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-4 d-flex flex-column align-self-end">
                    <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                      <h1 class="mb-0">$11468</h1>
                      <div class="badge rounded bg-label-success">+4.2%</div>
                    </div>
                    <small class="text-muted">You informed of this week compared to last week</small>
                  </div>
                  <div class="col-12 col-md-8">
                    <div id="weeklyEarningReports"></div>
                  </div>
                </div>
                <div class="border rounded p-3 mt-2">
                  <div class="row gap-4 gap-sm-0">
                    <div class="col-12 col-sm-4">
                      <div class="d-flex gap-2 align-items-center">
                        <div class="badge rounded bg-label-primary p-1"><i class="ti ti-currency-dollar ti-sm"></i></div>
                        <h6 class="mb-0">Earnings</h6>
                      </div>
                      <h4 class="my-2 pt-1">$545.69</h4>
                      <div class="progress w-75" style="height:4px">
                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="d-flex gap-2 align-items-center">
                        <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                        <h6 class="mb-0">Profit</h6>
                      </div>
                      <h4 class="my-2 pt-1">$256.34</h4>
                      <div class="progress w-75" style="height:4px">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="d-flex gap-2 align-items-center">
                        <div class="badge rounded bg-label-danger p-1"><i class="ti ti-brand-paypal ti-sm"></i></div>
                        <h6 class="mb-0">Expense</h6>
                      </div>
                      <h4 class="my-2 pt-1">$74.19</h4>
                      <div class="progress w-75" style="height:4px">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Support Tracker -->
          <div class="col-md-6 mb-4 order-md-3 order-lg-0">
            <div class="card">
              <div class="card-header pb-0 d-flex justify-content-between">
                <div class="card-title mb-0">
                  <h5 class="mb-0">Support Tracker</h5>
                  <small class="text-muted">Last 7 Days</small>
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <div class="card-body row">
                <div class="col-12 col-sm-4 col-md-12 col-lg-4">
                  <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1">
                    <h1 class="mb-0">164</h1>
                    <p class="mb-0">Total Tickets</p>
                  </div>
                  <ul class="p-0 m-0">
                    <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                      <div class="badge rounded bg-label-primary p-1"><i class="ti ti-ticket ti-sm"></i></div>
                      <div>
                        <h6 class="mb-0 text-nowrap">New Tickets</h6>
                        <small class="text-muted">142</small>
                      </div>
                    </li>
                    <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                      <div class="badge rounded bg-label-info p-1"><i class="ti ti-circle-check ti-sm"></i></div>
                      <div>
                        <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                        <small class="text-muted">28</small>
                      </div>
                    </li>
                    <li class="d-flex gap-3 align-items-center pb-1">
                      <div class="badge rounded bg-label-warning p-1"><i class="ti ti-clock ti-sm"></i></div>
                      <div>
                        <h6 class="mb-0 text-nowrap">Response Time</h6>
                        <small class="text-muted">1 Day</small>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-sm-8 col-md-12 col-lg-8">
                  <div id="supportTracker"></div>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Sales last 6 months -->
          <div class="col-md-6 col-lg-4 mb-4 order-md-3 order-lg-0">
            <div class="card h-100">
              <div class="card-header d-flex justify-content-between">
                <div class="card-title mb-0">
                  <h5 class="mb-0">Sales</h5>
                  <small class="text-muted">Last 6 Months</small>
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="salesLastMonthMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesLastMonthMenu">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div id="salesLastMonth"></div>
              </div>
            </div>
          </div>
        
          <!-- Revenue Report -->
          <div class="col-12 col-lg-8 mb-4 order-md-1 order-lg-0">
            <div class="card">
              <div class="card-body p-0">
                <div class="row row-bordered g-0">
                  <div class="col-md-8 position-relative p-4">
                    <div class="card-header d-inline-block p-0 text-wrap position-absolute">
                      <h5 class="m-0 card-title">Revenue Report</h5>
                    </div>
                    <div id="totalRevenueChart" class="mt-n1"></div>
                  </div>
                  <div class="col-md-4 p-4">
                    <div class="text-center mt-4">
                      <div class="dropdown">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="budgetId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <script>
                          document.write(new Date().getFullYear())
        
                          </script>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                          <a class="dropdown-item prev-year1" href="javascript:void(0);">
                            <script>
                            document.write(new Date().getFullYear() - 1)
        
                            </script>
                          </a>
                          <a class="dropdown-item prev-year2" href="javascript:void(0);">
                            <script>
                            document.write(new Date().getFullYear() - 2)
        
                            </script>
                          </a>
                          <a class="dropdown-item prev-year3" href="javascript:void(0);">
                            <script>
                            document.write(new Date().getFullYear() - 3)
        
                            </script>
                          </a>
                        </div>
                      </div>
                    </div>
                    <h3 class="text-center pt-4 mb-0">$25,825</h3>
                    <p class="mb-4 text-center"><span class="fw-medium">Budget: </span>56,800</p>
                    <div class="px-3">
                      <div id="budgetChart"></div>
                    </div>
                    <div class="text-center mt-4">
                      <button type="button" class="btn btn-primary">Increase Button</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Project Status -->
          <div class="col-lg-6 col-xl-4 mb-4 order-3 order-xl-0">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h5 class="mb-0 card-title">Project Status</h5>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="projectStatusId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectStatusId">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-start">
                  <div class="badge rounded bg-label-primary p-2 me-3 rounded"><i class="ti ti-currency-dollar ti-sm"></i></div>
                  <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                    <div class="me-2">
                      <h6 class="mb-0">$4,3742</h6>
                      <small class="text-muted">Your Earnings</small>
                    </div>
                    <p class="mb-0 text-success">+10.2%</p>
                  </div>
                </div>
                <div id="projectStatusChart"></div>
                <div class="d-flex justify-content-between mb-3">
                  <h6 class="mb-0">Donates</h6>
                  <div class="d-flex">
                    <p class="mb-0 me-3">$756.26</p>
                    <p class="mb-0 text-danger">-139.34</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between mb-3 pb-1">
                  <h6 class="mb-0">Podcasts</h6>
                  <div class="d-flex">
                    <p class="mb-0 me-3">$2,207.03</p>
                    <p class="mb-0 text-success">+576.24</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Earning Reports Tabs-->
          <div class="col-12 col-xl-8 mb-4 order-1 order-lg-0">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0">
                  <h5 class="mb-0">Earning Reports</h5>
                  <small class="text-muted">Yearly Earnings Overview</small>
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="earningReportsTabsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="nav nav-tabs widget-nav-tabs pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link btn active d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id" aria-controls="navs-orders-id" aria-selected="true">
                      <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-shopping-cart ti-sm"></i></div>
                      <h6 class="tab-widget-title mb-0 mt-2">Orders</h6>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-sales-id" aria-controls="navs-sales-id" aria-selected="false">
                      <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-chart-bar ti-sm"></i></div>
                      <h6 class="tab-widget-title mb-0 mt-2"> Sales</h6>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-profit-id" aria-controls="navs-profit-id" aria-selected="false">
                      <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-currency-dollar ti-sm"></i></div>
                      <h6 class="tab-widget-title mb-0 mt-2">Profit</h6>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-income-id" aria-controls="navs-income-id" aria-selected="false">
                      <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                      <h6 class="tab-widget-title mb-0 mt-2">Income</h6>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link btn d-flex align-items-center justify-content-center disabled" role="tab" data-bs-toggle="tab" aria-selected="false">
                      <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-plus ti-sm"></i></div>
                    </a>
                  </li>
                </ul>
                <div class="tab-content p-0 ms-0 ms-sm-2">
                  <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                    <div id="earningReportsTabsOrders"></div>
                  </div>
                  <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                    <div id="earningReportsTabsSales"></div>
                  </div>
                  <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                    <div id="earningReportsTabsProfit"></div>
                  </div>
                  <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
                    <div id="earningReportsTabsIncome"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Total Earning -->
          <div class="col-12 col-md-6 col-xl-4 mb-4 order-2 order-xl-0">
            <div class="card h-100">
              <div class="card-header d-flex justify-content-between pb-1">
                <h5 class="mb-0 card-title">Total Earning</h5>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="totalEarning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarning">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h1 class="mb-0 me-2">87%</h1>
                  <i class="ti ti-chevron-up text-success me-1"></i>
                  <p class="text-success mb-0">25.8%</p>
                </div>
                <div id="totalEarningChart"></div>
                <div class="d-flex align-items-start my-4">
                  <div class="badge rounded bg-label-danger p-2 me-3 rounded"><i class="ti ti-brand-paypal ti-sm"></i></div>
                  <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                    <div class="me-2">
                      <h6 class="mb-0">Total Revenue</h6>
                      <small class="text-muted">Client Payment</small>
                    </div>
                    <p class="mb-0 text-success">+$126</p>
                  </div>
                </div>
                <div class="d-flex align-items-start">
                  <div class="badge rounded bg-label-primary p-2 me-3 rounded"><i class="ti ti-currency-dollar ti-sm"></i></div>
                  <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                    <div class="me-2">
                      <h6 class="mb-0">Total Sales</h6>
                      <small class="text-muted">Refund</small>
                    </div>
                    <p class="mb-0 text-success">+$98</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Interested Topics -->
          <div class="col-12 col-lg-8 mb-4">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Topic you are interested in</h5>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="topic" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topic">
                    <a class="dropdown-item" href="javascript:void(0);">Highest Views</a>
                    <a class="dropdown-item" href="javascript:void(0);">See All</a>
                  </div>
                </div>
              </div>
              <div class="card-body row g-3">
                <div class="col-md-6">
                  <div id="horizontalBarChart"></div>
                </div>
                <div class="col-md-6 d-flex justify-content-around align-items-center">
                  <div>
                    <div class="d-flex align-items-baseline">
                      <span class="text-primary me-2"><i class='ti ti-circle-filled fs-6'></i></span>
                      <div>
                        <p class="mb-2">UI Design</p>
                        <h5>35%</h5>
                      </div>
                    </div>
                    <div class="d-flex align-items-baseline my-3">
                      <span class="text-success me-2"><i class='ti ti-circle-filled fs-6'></i></span>
                      <div>
                        <p class="mb-2">Music</p>
                        <h5>14%</h5>
                      </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <span class="text-danger me-2"><i class='ti ti-circle-filled fs-6'></i></span>
                      <div>
                        <p class="mb-2">React</p>
                        <h5>10%</h5>
                      </div>
                    </div>
                  </div>
        
                  <div>
                    <div class="d-flex align-items-baseline">
                      <span class="text-info me-2"><i class='ti ti-circle-filled fs-6'></i></span>
                      <div>
                        <p class="mb-2">UX Design</p>
                        <h5>20%</h5>
                      </div>
                    </div>
                    <div class="d-flex align-items-baseline my-3">
                      <span class="text-secondary me-2"><i class='ti ti-circle-filled fs-6'></i></span>
                      <div>
                        <p class="mb-2">Animation</p>
                        <h5>12%</h5>
                      </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <span class="text-warning me-2"><i class='ti ti-circle-filled fs-6'></i></span>
                      <div>
                        <p class="mb-2">SEO</p>
                        <h5>9%</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Carrier Performance -->
          <div class="col-12 col-lg-7 mb-4 order-3 order-xl-0">
            <div class="card">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Carrier Performance</h5>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="performance" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performance">
                    <a class="dropdown-item" href="javascript:void(0);">Delivery rate</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delivery time</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delivery exceptions</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div id="carrierPerformance"></div>
              </div>
            </div>
          </div>
          <!-- Vehicles overview -->
          <div class="col-12 col-lg-5 mb-4 order-3 order-xl-0">
            <div class="card h-100">
              <div class="card-header">
                <div class="card-title mb-0">
                  <h5 class="m-0">Vehicles overview</h5>
                </div>
              </div>
              <div class="card-body">
                <div class="d-none d-lg-flex vehicles-progress-labels mb-3">
                  <div class="vehicles-progress-label on-the-way-text" style="width: 39.7%;">On the way</div>
                  <div class="vehicles-progress-label unloading-text" style="width: 28.3%;">Unloading</div>
                  <div class="vehicles-progress-label loading-text" style="width: 17.4%;">Loading</div>
                  <div class="vehicles-progress-label waiting-text text-nowrap" style="width: 14.6%;">Waiting</div>
                </div>
                <div class="vehicles-overview-progress progress rounded-2 mb-3" style="height: 46px;">
                  <div class="progress-bar fw-medium text-start bg-body text-dark px-3 rounded-0" role="progressbar" style="width: 39.7%" aria-valuenow="39.7" aria-valuemin="0" aria-valuemax="100">39.7%</div>
                  <div class="progress-bar fw-medium text-start bg-primary px-3" role="progressbar" style="width: 28.3%" aria-valuenow="28.3" aria-valuemin="0" aria-valuemax="100">28.3%</div>
                  <div class="progress-bar fw-medium text-start text-bg-info px-3" role="progressbar" style="width: 17.4%" aria-valuenow="17.4" aria-valuemin="0" aria-valuemax="100">17.4%</div>
                  <div class="progress-bar fw-medium text-start bg-gray-900 px-2 rounded-0 px-lg-2 px-xxl-3" role="progressbar" style="width: 14.6%" aria-valuenow="14.6" aria-valuemin="0" aria-valuemax="100">14.6%</div>
                </div>
                <div class="table-responsive">
                  <table class="table card-table">
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="w-50 ps-0">
                          <div class="d-flex justify-content-start align-items-center">
                            <div class="me-2">
                              <i class="ti ti-truck mt-n1"></i>
                            </div>
                            <h6 class="mb-0 fw-normal">On the way</h6>
                          </div>
                        </td>
                        <td class="text-end pe-0 text-nowrap">
                          <h6 class="mb-0">2hr 10min</h6>
                        </td>
                        <td class="text-end pe-0">
                          <span class="fw-medium">39.7%</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-50 ps-0">
                          <div class="d-flex justify-content-start align-items-center">
                            <div class="me-2">
                              <i class='ti ti-circle-arrow-down mt-n1'></i>
                            </div>
                            <h6 class="mb-0 fw-normal">Unloading</h6>
                          </div>
                        </td>
                        <td class="text-end pe-0 text-nowrap">
                          <h6 class="mb-0">3hr 15min</h6>
                        </td>
                        <td class="text-end pe-0">
                          <span class="fw-medium">28.3%</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-50 ps-0">
                          <div class="d-flex justify-content-start align-items-center">
                            <div class="me-2">
                              <i class='ti ti-circle-arrow-up mt-n1'></i>
                            </div>
                            <h6 class="mb-0 fw-normal">Loading</h6>
                          </div>
                        </td>
                        <td class="text-end pe-0 text-nowrap">
                          <h6 class="mb-0">1hr 24min</h6>
                        </td>
                        <td class="text-end pe-0">
                          <span class="fw-medium">17.4%</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-50 ps-0">
                          <div class="d-flex justify-content-start align-items-center">
                            <div class="me-2">
                              <i class="ti ti-clock mt-n1"></i>
                            </div>
                            <h6 class="mb-0 fw-normal">Waiting</h6>
                          </div>
                        </td>
                        <td class="text-end pe-0 text-nowrap">
                          <h6 class="mb-0">5hr 19min</h6>
                        </td>
                        <td class="text-end pe-0">
                          <span class="fw-medium">14.6%</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        
          </div>
          <!-- Delivery Exceptions -->
          <div class="col-12 col-md-6 col-lg-4 mb-4 order-1 order-xl-0">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                <div class="card-title mb-0">
                  <h5 class="m-0 me-2">Reasons for delivery exceptions</h5>
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="deliveryExceptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryExceptions">
                    <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div id="deliveryExceptionsChart"></div>
              </div>
            </div>
          </div>
        </div>
        
        
        
                  </div>
                  <!-- / Content -->
        
                  
                  
        
        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
          <div class="container-xxl">
            <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
              <div>
                © <script>
                document.write(new Date().getFullYear())
        
                </script>
                , made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="fw-medium">Pixinvent</a>
              </div>
              <div class="d-none d-lg-inline-block">
                
                <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
                <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>
                
                <a href="../../documentation/index.html" target="_blank" class="footer-link me-4">Documentation</a>
                
                
                <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                
              </div>
            </div>
          </div>
        </footer>
        <!-- / Footer -->
        
                  
                  <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
              </div>
              <!-- / Layout page -->
            </div>
        
            
            
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
            
            
            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
            
          </div>
          <!-- / Layout wrapper -->
        
          
          <div class="buy-now">
            <a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
          </div>
          
        
          
        
          <!-- Core JS -->
          <!-- build:js assets/vendor/js/core.js -->
          
          <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
          <script src="../../assets/vendor/libs/popper/popper.js"></script>
          <script src="../../assets/vendor/js/bootstrap.js"></script>
          <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
          <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
          <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
          <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
          <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
           <script src="../../assets/vendor/js/menu.js"></script>
          
          <!-- endbuild -->
        
          <!-- Vendors JS -->
          <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
        
          <!-- Main JS -->
          <script src="../../assets/js/main.js"></script>
          
        
          <!-- Page JS -->
          <script src="../../assets/js/cards-analytics.js"></script>
          
        </body>
        
        </html>
        
        <!-- beautify ignore:end -->
        
        
        
        






    </h2>
@stop