@extends('layouts.layout')
@section('content')

        
        <!-- / Navbar -->
        
              
        
              <!-- Content wrapper -->
             
        
                <!-- Content -->
                
                  <div class="container-xxl flex-grow-1 container-p-y">
                    
                    
        <h4 class="py-3 mb-4">Opciones</h4>
        
        <div class="row mb-4">
          <!--  Pricing -->
          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <div class="card-body text-center">
                <i class="mb-3 ti ti-currency-dollar ti-lg"></i>
                <h5>Precios</h5>
                <p> Ejemplo de ventana emergente modal de opciones de precios elegante, fácil de usar en cualquier página..</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricingModal"> Entrar </button>
              </div>
            </div>
          </div>
          <!--/  Pricing -->
        
          <!--  Add New Credit Card -->
          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <div class="card-body text-center">
                <i class="mb-3 ti ti-credit-card ti-lg"></i>
                <h5>Agregar Tajetas</h5>
                <p> Detalles de la tarjeta de crédito, máscara de entrada integrada y soporte de validación de formularios.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Entrar </button>
              </div>
            </div>
          </div>
          <!--/  Add New Credit Card -->
        
          
        
          <!--  Refer & Earn -->
          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <div class="card-body text-center">
                <i class="mb-3 ti ti-gift ti-lg"></i>
                <h5>Recompensas</h5>
                <p>Utilice el modo Referir y ganar para alentar a sus clientes existentes a recomendar a sus amigos y colegas..</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#referAndEarn"> Entrar </button>
              </div>
            </div>
          </div>
          <!--/  Refer & Earn -->
        
          <!--  Edit User -->
          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <div class="card-body text-center">
                <i class="mb-3 ti ti-user ti-lg"></i>
                <h5>Edtar usuario</h5>
                <p> Se podra editar la informacion del ususario.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser"> Entrar </button>
              </div>
            </div>
          </div>
          <!--/  Edit User -->
        
          <!--  Enable OTP -->
          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <div class="card-body text-center">
                <i class="mb-3 ti ti-device-mobile ti-lg"></i>
                <h5>Habilitar OTP</h5>
                <p>Mejorar la seguridad de su aplicación habilitando la autenticación con OTP.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enableOTP"> Entrar </button>
              </div>
            </div>
          </div>
          <!--/  Enable OTP -->
        
        
          <!--  Payment methods -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="card">
              <div class="card-body text-center">
                <i class="mb-3 ti ti-credit-card ti-lg"></i>
                <h5>Add Payment Method</h5>
                <p>Metodos de pago elegante, fácil de usar en cualquier página..</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentMethods"> Entrar</button>
              </div>
            </div>
          </div>
          <!--/  Payment methods -->
        
        </div>
        
        <!-- All Modals -->
        <!-- Pricing Modal -->
        <div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-simple modal-pricing">
            <div class="modal-content p-2 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!-- Pricing Plans -->
                <div class="py-0 rounded-top">
                  <h2 class="text-center mb-2">Pricing Plans</h2>
                  <p class="text-center"> Get started with us - it's perfect for individuals and teams. Choose a subscription plan that meets your needs. </p>
                  <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pt-3 mb-4">
                    <label class="switch switch-primary ms-3 ms-sm-0 mt-2">
                      <span class="switch-label">Monthly</span>
                      <input type="checkbox" class="switch-input price-duration-toggler" checked />
                      <span class="switch-toggle-slider">
                        <span class="switch-on"></span>
                        <span class="switch-off"></span>
                      </span>
                      <span class="switch-label">Annual</span>
                    </label>
                    <div class="mt-n5 ms-n5 d-none d-sm-block">
                      <i class="ti ti-corner-left-down ti-sm text-muted me-1 scaleX-n1-rtl"></i>
                      <span class="badge badge-sm bg-label-primary">Save up to 10%</span>
                    </div>
                  </div>
                  <div class="row mx-0 gy-3">
                    <!-- Basic -->
                    <div class="col-xl mb-md-0 mb-4">
                      <div class="card border rounded shadow-none">
                        <div class="card-body">
                          <div class="my-3 pt-2 text-center">
                            <img src="../../assets/img/illustrations/page-pricing-basic.png" alt="Basic Image" height="140">
                          </div>
                          <h3 class="card-title text-center text-capitalize mb-1">Basic</h3>
                          <p class="text-center">A simple start for everyone</p>
                          <div class="text-center h-px-100 mb-2">
                            <div class="d-flex justify-content-center">
                              <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                              <h1 class="display-4 mb-0 text-primary">0</h1>
                              <sub class="h6 pricing-duration mt-auto mb-2 text-muted fw-normal">/month</sub>
                            </div>
                            <small class="price-yearly price-yearly-toggle text-muted">$ 0 / year</small>
                          </div>
        
                          <ul class="list-group ps-3 my-4">
                            <li class="mb-2">100 responses a month</li>
                            <li class="mb-2">Unlimited forms and surveys</li>
                            <li class="mb-2">Unlimited fields</li>
                            <li class="mb-2">Basic form creation tools</li>
                            <li class="mb-0">Up to 2 subdomains</li>
                          </ul>
        
                          <button type="button" class="btn btn-label-success d-grid w-100 mt-3" data-bs-dismiss="modal">Your Current Plan</button>
                        </div>
                      </div>
                    </div>
        
                    <!-- Pro -->
                    <div class="col-xl mb-md-0 mb-4">
                      <div class="card border-primary border shadow-none">
                        <div class="card-body position-relative">
                          <div class="position-absolute end-0 me-4 top-0 mt-4">
                            <span class="badge bg-label-primary">Popular</span>
                          </div>
                          <div class="my-3 pt-2 text-center">
                            <img src="../../assets/img/illustrations/page-pricing-standard.png" alt="Standard Image" height="140">
                          </div>
                          <h3 class="card-title text-center text-capitalize mb-1">Pro</h3>
                          <p class="text-center">For small to medium businesses</p>
                          <div class="text-center h-px-100 mb-2">
                            <div class="d-flex justify-content-center">
                              <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                              <h1 class="price-toggle price-yearly display-4 text-primary mb-0">7</h1>
                              <h1 class="price-toggle price-monthly display-4 text-primary mb-0 d-none">9</h1>
                              <sub class="h6 text-muted pricing-duration mt-auto mb-2 fw-normal">/month</sub>
                            </div>
                            <small class="price-yearly price-yearly-toggle text-muted">$ 90 / year</small>
                          </div>
        
                          <ul class="list-group ps-3 my-4">
                            <li class="mb-2">Up to 5 users</li>
                            <li class="mb-2">120+ components</li>
                            <li class="mb-2">Basic support on Github</li>
                            <li class="mb-2">Monthly updates</li>
                            <li class="mb-0">Integrations</li>
                          </ul>
        
                          <button type="button" class="btn btn-primary d-grid w-100 mt-3" data-bs-dismiss="modal">Upgrade</button>
                        </div>
                      </div>
                    </div>
        
                    <!-- Enterprise -->
                    <div class="col-xl">
                      <div class="card border rounded shadow-none">
                        <div class="card-body">
        
                          <div class="my-3 pt-2 text-center">
                            <img src="../../assets/img/illustrations/page-pricing-enterprise.png" alt="Enterprise Image" height="140">
                          </div>
                          <h3 class="card-title text-center text-capitalize mb-1">Enterprise</h3>
                          <p class="text-center">Solution for big organizations</p>
        
                          <div class="text-center h-px-100 mb-2">
                            <div class="d-flex justify-content-center">
                              <sup class="h6 text-primary pricing-currency mt-3 mb-0 me-1">$</sup>
                              <h1 class="price-toggle price-yearly display-4 text-primary mb-0">16</h1>
                              <h1 class="price-toggle price-monthly display-4 text-primary mb-0 d-none">19</h1>
                              <sub class="h6 pricing-duration mt-auto mb-2 fw-normal text-muted">/month</sub>
                            </div>
                            <small class="price-yearly price-yearly-toggle text-muted">$ 190 / year</small>
                          </div>
        
                          <ul class="list-group ps-3 my-4">
                            <li class="mb-2">Up to 10 users</li>
                            <li class="mb-2">150+ components</li>
                            <li class="mb-2">Basic support on Github</li>
                            <li class="mb-2">Monthly updates</li>
                            <li class="mb-0">Speedy build tooling</li>
                          </ul>
        
                          <button type="button" class="btn btn-label-primary d-grid w-100 mt-3" data-bs-dismiss="modal">Upgrade</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Pricing Plans -->
              </div>
            </div>
          </div>
        </div>
        <!--/ Pricing Modal -->
        
        <script src="../../assets/js/pages-pricing.js"></script>
        
        <!-- Add New Credit Card Modal -->
        <div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                  <h3 class="mb-2">Add New Card</h3>
                  <p class="text-muted">Add new card to complete payment</p>
                </div>
                <form id="addNewCCForm" class="row g-3" onsubmit="return false">
                  <div class="col-12">
                    <label class="form-label w-100" for="modalAddCard">Card Number</label>
                    <div class="input-group input-group-merge">
                      <input id="modalAddCard" name="modalAddCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2" />
                      <span class="input-group-text cursor-pointer p-1" id="modalAddCard2"><span class="card-type"></span></span>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalAddCardName">Name</label>
                    <input type="text" id="modalAddCardName" class="form-control" placeholder="John Doe" />
                  </div>
                  <div class="col-6 col-md-3">
                    <label class="form-label" for="modalAddCardExpiryDate">Exp. Date</label>
                    <input type="text" id="modalAddCardExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY" />
                  </div>
                  <div class="col-6 col-md-3">
                    <label class="form-label" for="modalAddCardCvv">CVV Code</label>
                    <div class="input-group input-group-merge">
                      <input type="text" id="modalAddCardCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
                      <span class="input-group-text cursor-pointer" id="modalAddCardCvv2"><i class="text-muted ti ti-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                    </div>
                  </div>
                  <div class="col-12">
                    <label class="switch">
                      <input type="checkbox" class="switch-input">
                      <span class="switch-toggle-slider">
                        <span class="switch-on"></span>
                        <span class="switch-off"></span>
                      </span>
                      <span class="switch-label">Save card for future billing?</span>
                    </label>
                  </div>
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--/ Add New Credit Card Modal -->
        
        <!-- Add New Address Modal -->
        <div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                  <h3 class="address-title mb-2">Add New Address</h3>
                  <p class="text-muted address-subtitle">Add new address for express delivery</p>
                </div>
                <form id="addNewAddressForm" class="row g-3" onsubmit="return false">
        
                  <div class="col-12">
                    <div class="row">
                      <div class="col-md mb-md-0 mb-3">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioHome">
                            <span class="custom-option-body">
                              <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.25 33.75V23.75H16.75V33.75H6.75002V18.0469C6.7491 17.8733 6.78481 17.7015 6.85482 17.5426C6.92482 17.3838 7.02754 17.2415 7.15627 17.125L19.6563 5.76562C19.8841 5.5559 20.1825 5.43948 20.4922 5.43948C20.8019 5.43948 21.1003 5.5559 21.3281 5.76562L33.8438 17.125C33.9696 17.2438 34.0703 17.3866 34.1401 17.5449C34.2098 17.7032 34.2472 17.8739 34.25 18.0469V33.75H24.25Z" fill="currentColor" opacity="0.2" />
                                <path d="M33.25 33.75C33.25 34.3023 33.6977 34.75 34.25 34.75C34.8023 34.75 35.25 34.3023 35.25 33.75H33.25ZM34.25 18.0469H35.25C35.25 18.0415 35.25 18.0361 35.2499 18.0307L34.25 18.0469ZM33.8437 17.125L34.5304 16.398C34.5256 16.3934 34.5207 16.389 34.5158 16.3845L33.8437 17.125ZM21.3281 5.76562L20.6509 6.50143L20.656 6.50611L21.3281 5.76562ZM19.6562 5.76562L20.3288 6.5057L20.3335 6.50141L19.6562 5.76562ZM7.15625 17.125L7.82712 17.8666L7.82878 17.8651L7.15625 17.125ZM6.75 18.0469H7.75001L7.74999 18.0416L6.75 18.0469ZM5.75 33.75C5.75 34.3023 6.19772 34.75 6.75 34.75C7.30228 34.75 7.75 34.3023 7.75 33.75H5.75ZM3 32.75C2.44772 32.75 2 33.1977 2 33.75C2 34.3023 2.44772 34.75 3 34.75V32.75ZM38 34.75C38.5523 34.75 39 34.3023 39 33.75C39 33.1977 38.5523 32.75 38 32.75V34.75ZM23.25 33.75C23.25 34.3023 23.6977 34.75 24.25 34.75C24.8023 34.75 25.25 34.3023 25.25 33.75H23.25ZM15.75 33.75C15.75 34.3023 16.1977 34.75 16.75 34.75C17.3023 34.75 17.75 34.3023 17.75 33.75H15.75ZM35.25 33.75V18.0469H33.25V33.75H35.25ZM35.2499 18.0307C35.2449 17.7243 35.1787 17.422 35.0551 17.1416L33.225 17.9481C33.2409 17.9844 33.2495 18.0235 33.2501 18.0631L35.2499 18.0307ZM35.0551 17.1416C34.9316 16.8612 34.7531 16.6084 34.5304 16.398L33.1571 17.852C33.1859 17.8792 33.209 17.9119 33.225 17.9481L35.0551 17.1416ZM34.5158 16.3845L22.0002 5.02514L20.656 6.50611L33.1717 17.8655L34.5158 16.3845ZM22.0053 5.02984C21.5929 4.6502 21.0528 4.43948 20.4922 4.43948V6.43948C20.551 6.43948 20.6076 6.46159 20.6509 6.50141L22.0053 5.02984ZM20.4922 4.43948C19.9316 4.43948 19.3915 4.6502 18.979 5.02984L20.3335 6.50141C20.3767 6.46159 20.4334 6.43948 20.4922 6.43948V4.43948ZM18.9837 5.02556L6.48371 16.3849L7.82878 17.8651L20.3288 6.50569L18.9837 5.02556ZM6.48538 16.3834C6.25236 16.5942 6.06642 16.8518 5.93971 17.1393L7.76988 17.9459C7.78318 17.9157 7.80268 17.8887 7.82712 17.8666L6.48538 16.3834ZM5.93971 17.1393C5.813 17.4269 5.74836 17.7379 5.75001 18.0521L7.74999 18.0416C7.74981 18.0087 7.75659 17.976 7.76988 17.9459L5.93971 17.1393ZM5.75 18.0469V33.75H7.75V18.0469H5.75ZM3 34.75H38V32.75H3V34.75ZM25.25 33.75V25H23.25V33.75H25.25ZM25.25 25C25.25 24.4033 25.013 23.831 24.591 23.409L23.1768 24.8232C23.2237 24.8701 23.25 24.9337 23.25 25H25.25ZM24.591 23.409C24.169 22.987 23.5967 22.75 23 22.75V24.75C23.0663 24.75 23.1299 24.7763 23.1768 24.8232L24.591 23.409ZM23 22.75H18V24.75H23V22.75ZM18 22.75C17.4033 22.75 16.831 22.9871 16.409 23.409L17.8232 24.8232C17.8701 24.7763 17.9337 24.75 18 24.75V22.75ZM16.409 23.409C15.9871 23.831 15.75 24.4033 15.75 25H17.75C17.75 24.9337 17.7763 24.8701 17.8232 24.8232L16.409 23.409ZM15.75 25V33.75H17.75V25H15.75Z" fill="currentColor" />
                              </svg>
        
                              <span class="custom-option-title">Home</span>
                              <small> Delivery time (9am – 9pm) </small>
                            </span>
                            <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioHome" checked />
                          </label>
                        </div>
                      </div>
                      <div class="col-md mb-md-0 mb-3">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioOffice">
                            <span class="custom-option-body">
                              <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.75 33.75V6.25C22.75 5.91848 22.6183 5.60054 22.3839 5.36612C22.1495 5.1317 21.8315 5 21.5 5H6.5C6.16848 5 5.85054 5.1317 5.61612 5.36612C5.3817 5.60054 5.25 5.91848 5.25 6.25V33.75" fill="currentColor" fill-opacity="0.2" />
                                <path d="M2.75 32.75C2.19772 32.75 1.75 33.1977 1.75 33.75C1.75 34.3023 2.19772 34.75 2.75 34.75V32.75ZM37.75 34.75C38.3023 34.75 38.75 34.3023 38.75 33.75C38.75 33.1977 38.3023 32.75 37.75 32.75V34.75ZM21.75 33.75C21.75 34.3023 22.1977 34.75 22.75 34.75C23.3023 34.75 23.75 34.3023 23.75 33.75H21.75ZM21.5 5V4V5ZM5.25 6.25H4.25H5.25ZM4.25 33.75C4.25 34.3023 4.69772 34.75 5.25 34.75C5.80228 34.75 6.25 34.3023 6.25 33.75H4.25ZM34.25 33.75C34.25 34.3023 34.6977 34.75 35.25 34.75C35.8023 34.75 36.25 34.3023 36.25 33.75H34.25ZM22.75 14C22.1977 14 21.75 14.4477 21.75 15C21.75 15.5523 22.1977 16 22.75 16V14ZM10.25 10.25C9.69772 10.25 9.25 10.6977 9.25 11.25C9.25 11.8023 9.69772 12.25 10.25 12.25V10.25ZM15.25 12.25C15.8023 12.25 16.25 11.8023 16.25 11.25C16.25 10.6977 15.8023 10.25 15.25 10.25V12.25ZM12.75 20.25C12.1977 20.25 11.75 20.6977 11.75 21.25C11.75 21.8023 12.1977 22.25 12.75 22.25V20.25ZM17.75 22.25C18.3023 22.25 18.75 21.8023 18.75 21.25C18.75 20.6977 18.3023 20.25 17.75 20.25V22.25ZM10.25 26.5C9.69772 26.5 9.25 26.9477 9.25 27.5C9.25 28.0523 9.69772 28.5 10.25 28.5V26.5ZM15.25 28.5C15.8023 28.5 16.25 28.0523 16.25 27.5C16.25 26.9477 15.8023 26.5 15.25 26.5V28.5ZM27.75 26.5C27.1977 26.5 26.75 26.9477 26.75 27.5C26.75 28.0523 27.1977 28.5 27.75 28.5V26.5ZM30.25 28.5C30.8023 28.5 31.25 28.0523 31.25 27.5C31.25 26.9477 30.8023 26.5 30.25 26.5V28.5ZM27.75 20.25C27.1977 20.25 26.75 20.6977 26.75 21.25C26.75 21.8023 27.1977 22.25 27.75 22.25V20.25ZM30.25 22.25C30.8023 22.25 31.25 21.8023 31.25 21.25C31.25 20.6977 30.8023 20.25 30.25 20.25V22.25ZM2.75 34.75H37.75V32.75H2.75V34.75ZM23.75 33.75V6.25H21.75V33.75H23.75ZM23.75 6.25C23.75 5.65326 23.5129 5.08097 23.091 4.65901L21.6768 6.07322C21.7237 6.12011 21.75 6.18369 21.75 6.25H23.75ZM23.091 4.65901C22.669 4.23705 22.0967 4 21.5 4V6C21.5663 6 21.6299 6.02634 21.6768 6.07322L23.091 4.65901ZM21.5 4H6.5V6H21.5V4ZM6.5 4C5.90326 4 5.33097 4.23705 4.90901 4.65901L6.32322 6.07322C6.37011 6.02634 6.4337 6 6.5 6V4ZM4.90901 4.65901C4.48705 5.08097 4.25 5.65326 4.25 6.25H6.25C6.25 6.1837 6.27634 6.12011 6.32322 6.07322L4.90901 4.65901ZM4.25 6.25V33.75H6.25V6.25H4.25ZM36.25 33.75V16.25H34.25V33.75H36.25ZM36.25 16.25C36.25 15.6533 36.013 15.081 35.591 14.659L34.1768 16.0732C34.2237 16.1201 34.25 16.1837 34.25 16.25H36.25ZM35.591 14.659C35.169 14.2371 34.5967 14 34 14V16C34.0663 16 34.1299 16.0263 34.1768 16.0732L35.591 14.659ZM34 14H22.75V16H34V14ZM10.25 12.25H15.25V10.25H10.25V12.25ZM12.75 22.25H17.75V20.25H12.75V22.25ZM10.25 28.5H15.25V26.5H10.25V28.5ZM27.75 28.5H30.25V26.5H27.75V28.5ZM27.75 22.25H30.25V20.25H27.75V22.25Z" fill="currentColor" />
                              </svg>
        
                              <span class="custom-option-title"> Office </span>
                              <small> Delivery time (9am – 5pm) </small>
                            </span>
                            <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioOffice" />
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalAddressFirstName">First Name</label>
                    <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalAddressLastName">Last Name</label>
                    <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe" />
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="modalAddressCountry">Country</label>
                    <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Australia">Australia</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Japan">Japan</option>
                      <option value="Korea">Korea, Republic of</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Russia">Russian Federation</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
                  </div>
                  <div class="col-12 ">
                    <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
                    <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park" />
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
                    <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalAddressLandmark">Landmark</label>
                    <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalAddressCity">City</label>
                    <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalAddressLandmark">State</label>
                    <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalAddressZipCode">Zip Code</label>
                    <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950" />
                  </div>
                  <div class="col-12">
                    <label class="switch">
                      <input type="checkbox" class="switch-input">
                      <span class="switch-toggle-slider">
                        <span class="switch-on"></span>
                        <span class="switch-off"></span>
                      </span>
                      <span class="switch-label">Use as a billing address?</span>
                    </label>
                  </div>
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--/ Add New Address Modal -->
        
        <!-- Refer & Earn Modal -->
        <div class="modal fade" id="referAndEarn" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-simple modal-refer-and-earn">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                  <h3 class="mb-2">Refer & Earn</h3>
                  <p class="text-muted text-center mb-5 w-75 m-auto">Invite your friend to Vuexy, if they sign up, you and your friend will get 30 days free trial.</p>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-4 px-4">
                    <div class="d-flex justify-content-center mb-4">
                      <div class="modal-refer-and-earn-step bg-label-primary">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M40.0438 0.32551C39.6037 0.212925 39.1415 0.220312 38.7052 0.346848L38.6998 0.348436L2.31054 10.5975L2.30631 10.5987C1.79977 10.7381 1.34829 11.0299 1.01307 11.4345C0.676914 11.8402 0.474009 12.3397 0.431991 12.865C0.389973 13.3902 0.510885 13.9156 0.778258 14.3696C1.04417 14.8212 1.44209 15.1803 1.9183 15.3986L18.631 23.3059L18.6309 23.3059L18.6384 23.3094C18.7509 23.3615 18.8413 23.4519 18.8934 23.5644L18.8934 23.5644L18.8969 23.5718L26.8042 40.2846C27.0226 40.7608 27.3816 41.1586 27.8332 41.4245C28.2872 41.6919 28.8126 41.8128 29.3378 41.7708C29.8631 41.7288 30.3626 41.5259 30.7683 41.1897C31.1729 40.8545 31.4647 40.403 31.6041 39.8964L31.6053 39.8923L41.8544 3.503L41.8559 3.4977C41.9825 3.06141 41.9899 2.59913 41.8773 2.15896C41.7642 1.71699 41.5344 1.31358 41.2118 0.991003C40.8892 0.668428 40.4858 0.438565 40.0438 0.32551ZM39.2516 2.27078L38.9805 1.30823L39.2612 2.26802C39.3547 2.24067 39.4538 2.23898 39.5482 2.26312C39.6426 2.28726 39.7287 2.33634 39.7976 2.40522C39.8665 2.47409 39.9155 2.56023 39.9397 2.6546C39.9638 2.74896 39.9621 2.84809 39.9348 2.94157L39.9347 2.94156L39.932 2.95118L29.6781 39.3574L29.6781 39.3574L29.6761 39.3648C29.6456 39.4764 29.5814 39.5758 29.4923 39.6496C29.4033 39.7234 29.2936 39.768 29.1783 39.7772C29.063 39.7864 28.9477 39.7599 28.848 39.7012C28.7484 39.6425 28.6692 39.5545 28.6214 39.4492L28.6149 39.4352L20.7676 22.8494L29.1017 14.5153C29.4922 14.1248 29.4922 13.4916 29.1017 13.1011C28.7112 12.7106 28.078 12.7106 27.6875 13.1011L19.3534 21.4352L2.76756 13.5879L2.75361 13.5814C2.64831 13.5336 2.56032 13.4544 2.50163 13.3548C2.44294 13.2551 2.4164 13.1398 2.42562 13.0245C2.43484 12.9092 2.47939 12.7995 2.55317 12.7105C2.62696 12.6214 2.72642 12.5572 2.83798 12.5267L2.83799 12.5268L2.84536 12.5247L39.2516 2.27078Z" fill="#7367F0" />
                        </svg>
                      </div>
                    </div>
                    <div class="text-center">
                      <h5>Send Invitation 🤟🏻</h5>
                      <p class="mb-lg-0">Send your referral link to your friend</p>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 px-4">
                    <div class="d-flex justify-content-center mb-4">
                      <div class="modal-refer-and-earn-step bg-label-primary">
                        <svg width="43" height="31" viewBox="0 0 43 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M2.104 2.89417C2.104 2.52957 2.39957 2.23401 2.76416 2.23401H40.0688C40.4334 2.23401 40.729 2.52957 40.729 2.89417V27.6989C40.729 28.0634 40.4334 28.359 40.0688 28.359H2.76416C2.39957 28.359 2.104 28.0634 2.104 27.6989V2.89417ZM2.76416 0.234009C1.295 0.234009 0.104004 1.425 0.104004 2.89417V27.6989C0.104004 29.168 1.295 30.359 2.76416 30.359H40.0688C41.538 30.359 42.729 29.168 42.729 27.6989V2.89417C42.729 1.425 41.538 0.234009 40.0688 0.234009H2.76416ZM7.354 8.04651C6.80172 8.04651 6.354 8.49422 6.354 9.04651C6.354 9.59879 6.80172 10.0465 7.354 10.0465H35.479C36.0313 10.0465 36.479 9.59879 36.479 9.04651C36.479 8.49422 36.0313 8.04651 35.479 8.04651H7.354ZM7.354 14.2965C6.80172 14.2965 6.354 14.7442 6.354 15.2965C6.354 15.8488 6.80172 16.2965 7.354 16.2965H35.479C36.0313 16.2965 36.479 15.8488 36.479 15.2965C36.479 14.7442 36.0313 14.2965 35.479 14.2965H7.354ZM6.354 21.5465C6.354 20.9942 6.80172 20.5465 7.354 20.5465H8.9165C9.46879 20.5465 9.9165 20.9942 9.9165 21.5465C9.9165 22.0988 9.46879 22.5465 8.9165 22.5465H7.354C6.80172 22.5465 6.354 22.0988 6.354 21.5465ZM15.1665 20.5465C14.6142 20.5465 14.1665 20.9942 14.1665 21.5465C14.1665 22.0988 14.6142 22.5465 15.1665 22.5465H27.6665C28.2188 22.5465 28.6665 22.0988 28.6665 21.5465C28.6665 20.9942 28.2188 20.5465 27.6665 20.5465H15.1665ZM32.9165 21.5465C32.9165 20.9942 33.3642 20.5465 33.9165 20.5465H35.479C36.0313 20.5465 36.479 20.9942 36.479 21.5465C36.479 22.0988 36.0313 22.5465 35.479 22.5465H33.9165C33.3642 22.5465 32.9165 22.0988 32.9165 21.5465Z" fill="#7367F0" />
                        </svg>
        
                      </div>
                    </div>
                    <div class="text-center">
                      <h5>Registration 👩🏻‍💻</h5>
                      <p class="mb-lg-0">Let them register to our services</p>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 px-4">
                    <div class="d-flex justify-content-center mb-4">
                      <div class="modal-refer-and-earn-step bg-label-primary">
                        <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M42.5082 29.2809L36.3754 21.9176C36.6098 26.4293 35.4965 31.6832 32.059 37.6793L37.9184 42.3668C38.1267 42.5323 38.3739 42.6418 38.6364 42.685C38.8989 42.7282 39.1682 42.7036 39.4185 42.6137C39.6689 42.5237 39.8922 42.3712 40.0672 42.1708C40.2421 41.9704 40.363 41.7286 40.4184 41.4684L42.8207 30.609C42.8787 30.3788 42.8805 30.138 42.8261 29.9069C42.7718 29.6758 42.6627 29.4611 42.5082 29.2809ZM9.22698 29.3981L15.3598 22.0543C15.1254 26.566 16.2387 31.8199 19.6762 37.7965L13.8168 42.484C13.6098 42.6494 13.3641 42.7595 13.1028 42.8038C12.8415 42.8481 12.5733 42.8253 12.3233 42.7374C12.0732 42.6495 11.8497 42.4994 11.6736 42.3014C11.4976 42.1033 11.3748 41.8637 11.3168 41.6051L8.91448 30.7262C8.85656 30.496 8.85471 30.2552 8.90909 30.0241C8.96346 29.793 9.07247 29.5783 9.22698 29.3981Z" fill="#7367F0" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M24.3176 3.38868C24.7699 3.01443 25.3387 2.80954 25.9261 2.80954C26.515 2.80954 27.0853 3.0155 27.5382 3.39163C29.4409 4.94083 33.5595 8.78358 35.834 14.6958C36.6201 16.7389 37.1809 19.0171 37.3596 21.517L43.3898 28.7533C43.6457 29.0537 43.8263 29.4108 43.9167 29.7951C44.0065 30.1765 44.0047 30.5737 43.9117 30.9542L41.5121 41.8207L41.5114 41.8238C41.4163 42.2479 41.2149 42.6409 40.9262 42.9657C40.6374 43.2906 40.2708 43.5366 39.8608 43.6808C39.4508 43.8249 39.0109 43.8624 38.5824 43.7897C38.1539 43.717 37.7509 43.5365 37.4114 43.2653L37.4109 43.2649L31.8254 38.7965H20.027L14.4415 43.2649L14.441 43.2653C14.1015 43.5366 13.6985 43.717 13.27 43.7897C12.8415 43.8624 12.4016 43.8249 11.9916 43.6808C11.5816 43.5366 11.215 43.2906 10.9262 42.9657C10.6375 42.6409 10.4361 42.2479 10.341 41.8239L10.3403 41.8207L7.94073 30.9542C7.84769 30.5737 7.84592 30.1765 7.93567 29.7951C8.02613 29.4106 8.20692 29.0533 8.46302 28.7528L14.3781 21.6697C14.5414 19.1062 15.1132 16.7733 15.9241 14.6854C18.2211 8.7718 22.3929 4.9297 24.3176 3.38868ZM35.3901 22.0699C35.3771 21.9945 35.3727 21.9181 35.377 21.8423C35.2271 19.4626 34.6998 17.3175 33.9674 15.4139C31.8686 9.9585 28.0426 6.38071 26.2715 4.93932L26.2616 4.93129L26.2616 4.93123C26.1675 4.85261 26.0488 4.80954 25.9261 4.80954C25.8035 4.80954 25.6847 4.85261 25.5906 4.93123L25.5742 4.94458C23.7847 6.37618 19.9075 9.95373 17.7884 15.4096C17.0279 17.3677 16.4879 19.5818 16.3598 22.0443C16.3602 22.0842 16.3582 22.1242 16.3539 22.1641C16.1596 26.3436 17.1527 31.2334 20.2583 36.7965H31.5881C34.6534 31.1912 35.6107 26.27 35.3901 22.0699ZM41.8572 30.0383L37.3782 24.6635C37.1526 28.5202 36.0025 32.8261 33.459 37.5421L38.6598 41.7028C38.7343 41.7623 38.8228 41.8019 38.9169 41.8179C39.0109 41.8338 39.1075 41.8256 39.1975 41.794C39.2875 41.7623 39.368 41.7083 39.4313 41.637C39.4945 41.566 39.5386 41.4802 39.5595 41.3875L39.5598 41.3863L41.9615 30.5106C41.9635 30.5011 41.9658 30.4917 41.9681 30.4822C41.987 30.4071 41.9876 30.3286 41.9699 30.2531C41.9522 30.1777 41.9166 30.1077 41.8662 30.0489L41.8571 30.0383L41.8572 30.0383ZM14.3842 24.7826L9.99453 30.0391L9.9863 30.0489L9.98624 30.0489C9.93582 30.1077 9.90025 30.1777 9.8825 30.2531C9.86476 30.3286 9.86536 30.4071 9.88426 30.4822C9.88663 30.4917 9.88886 30.5011 9.89095 30.5106L12.2926 41.3864L12.2929 41.3875C12.3138 41.4802 12.3579 41.566 12.4211 41.637C12.4844 41.7083 12.5649 41.7623 12.6549 41.794C12.7449 41.8256 12.8415 41.8338 12.9356 41.8179C13.0294 41.802 13.1177 41.7625 13.1921 41.7031L14.9699 28.7801C14.659 27.3993 14.4696 26.0663 14.3842 24.7826ZM14.97 28.7806L13.1926 41.7028L18.3875 37.5468C16.6805 34.4443 15.5865 31.5184 14.97 28.7806ZM21.8012 44.0465C21.8012 43.4942 22.2489 43.0465 22.8012 43.0465H29.0512C29.6035 43.0465 30.0512 43.4942 30.0512 44.0465C30.0512 44.5988 29.6035 45.0465 29.0512 45.0465H22.8012C22.2489 45.0465 21.8012 44.5988 21.8012 44.0465ZM28.27 19.0465C28.27 20.3409 27.2206 21.3903 25.9262 21.3903C24.6318 21.3903 23.5825 20.3409 23.5825 19.0465C23.5825 17.7521 24.6318 16.7028 25.9262 16.7028C27.2206 16.7028 28.27 17.7521 28.27 19.0465Z" fill="#7367F0" />
                        </svg>
                      </div>
                    </div>
                    <div class="text-center">
                      <h5>Free Trial 🎉</h5>
                      <p class="mb-0">Your friend will get 30 days free trial</p>
                    </div>
                  </div>
                </div>
                <hr class="my-5" />
                <h5>Invite your friends</h5>
                <form class="row g-3" onsubmit="return false">
                  <div class="col-lg-10">
                    <label class="form-label" for="modalRnFEmail">Enter your friend’s email address and invite them to join Vuexy 😍</label>
                    <input type="text" id="modalRnFEmail" class="form-control" placeholder="example@domain.com" aria-label="example@domain.com">
                  </div>
                  <div class="col-lg-2 d-flex align-items-end">
                    <button type="button" class="btn btn-primary">Send</button>
                  </div>
                </form>
                <h5 class="mt-4">Share the referral link</h5>
                <form class="row g-3" onsubmit="return false">
                  <div class="col-lg-9">
                    <label class="form-label" for="modalRnFLink">You can also copy and send it or share it on your social media. 🥳</label>
                    <div class="input-group input-group-merge">
                      <input type="text" id="modalRnFLink" class="form-control" value="https://pixinvent.com">
                      <span class="input-group-text text-primary cursor-pointer" id="basic-addon33">Copy link</span>
                    </div>
                  </div>
                  <div class="col-lg-3 d-flex align-items-end">
                    <div class="btn-social">
                      <button type="button" class="btn btn-icon btn-facebook me-2"><i class="ti ti-brand-facebook"></i></button>
                      <button type="button" class="btn btn-icon btn-twitter me-2"><i class="ti ti-brand-twitter"></i></button>
                      <button type="button" class="btn btn-icon btn-linkedin"><i class="ti ti-brand-linkedin"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--/ Refer & Earn Modal -->
        
        <!-- Edit User Modal -->
        <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-simple modal-edit-user">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                  <h3 class="mb-2">Edit User Information</h3>
                  <p class="text-muted">Updating user details will receive a privacy audit.</p>
                </div>
                <form id="editUserForm" class="row g-3" onsubmit="return false">
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalEditUserFirstName">First Name</label>
                    <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalEditUserLastName">Last Name</label>
                    <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" />
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="modalEditUserName">Username</label>
                    <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="john.doe.007" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalEditUserEmail">Email</label>
                    <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalEditUserStatus">Status</label>
                    <select id="modalEditUserStatus" name="modalEditUserStatus" class="select2 form-select" aria-label="Default select example">
                      <option selected>Status</option>
                      <option value="1">Active</option>
                      <option value="2">Inactive</option>
                      <option value="3">Suspended</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalEditTaxID">Tax ID</label>
                    <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                    <div class="input-group">
                      <span class="input-group-text">US (+1)</span>
                      <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" />
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalEditUserLanguage">Language</label>
                    <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
                      <option value="">Select</option>
                      <option value="english" selected>English</option>
                      <option value="spanish">Spanish</option>
                      <option value="french">French</option>
                      <option value="german">German</option>
                      <option value="dutch">Dutch</option>
                      <option value="hebrew">Hebrew</option>
                      <option value="sanskrit">Sanskrit</option>
                      <option value="hindi">Hindi</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="modalEditUserCountry">Country</label>
                    <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Australia">Australia</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Japan">Japan</option>
                      <option value="Korea">Korea, Republic of</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Russia">Russian Federation</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label class="switch">
                      <input type="checkbox" class="switch-input">
                      <span class="switch-toggle-slider">
                        <span class="switch-on"></span>
                        <span class="switch-off"></span>
                      </span>
                      <span class="switch-label">Use as a billing address?</span>
                    </label>
                  </div>
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--/ Edit User Modal -->
        
        <!-- Enable OTP Modal -->
        <div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                  <h3 class="mb-2">Enable One Time Password</h3>
                  <p>Verify Your Mobile Number for SMS</p>
                </div>
                <p>Enter your mobile phone number with country code and we will send you a verification code.</p>
                <form id="enableOTPForm" class="row g-3" onsubmit="return false">
                  <div class="col-12">
                    <label class="form-label" for="modalEnableOTPPhone">Phone Number</label>
                    <div class="input-group">
                      <span class="input-group-text">US (+1)</span>
                      <input type="text" id="modalEnableOTPPhone" name="modalEnableOTPPhone" class="form-control phone-number-otp-mask" placeholder="202 555 0111" />
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--/ Enable OTP Modal -->
        
        <!-- Share Project Modal -->
        <div class="modal fade" id="shareProject" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center">
                  <h3 class="mb-2">Share Project</h3>
                  <p>Share project with a team member</p>
                </div>
              </div>
              <div class="mb-4 pb-2">
                <label for="select2Basic" class="form-label">Add Members</label>
                <select id="select2Basic" class="form-select form-select-lg share-project-select" data-allow-clear="true">
                  <option data-name="Adelaide Nichols" data-image="https://demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/img/avatars/13.png" selected>Adelaide Nichols</option>
                  <option data-name="Julian Murphy" data-image="https://demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/img/avatars/9.png">Julian Murphy</option>
                  <option data-name="Sophie Gilbert" data-image="https://demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/img/avatars/10.png">Sophie Gilbert</option>
                  <option data-name="Marvin Wheeler" data-image="https://demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/img/avatars/7.png">Marvin Wheeler</option>
                </select>
              </div>
              <h4 class="mb-4 pb-2">8 Members</h4>
              <ul class="p-0 m-0">
                <li class="d-flex flex-wrap mb-3">
                  <div class="avatar me-3">
                    <img src="../../assets/img/avatars/1.png" alt="avatar" class="rounded-circle">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-2">
                      <p class="mb-0">Lester Palmer</p>
                      <p class="mb-0 text-muted">pe@vogeiz.net</p>
                    </div>
                    <div class="dropdown">
                      <button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can Edit</span></button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-wrap mb-3">
                  <div class="avatar me-3">
                    <img src="../../assets/img/avatars/2.png" alt="avatar" class="rounded-circle">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-2">
                      <p class="mb-0">Mattie Blair</p>
                      <p class="mb-0 text-muted">peromak@zukedohik.gov</p>
                    </div>
                    <div class="dropdown">
                      <button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Owner</span></button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-wrap mb-3">
                  <div class="avatar me-3">
                    <img src="../../assets/img/avatars/3.png" alt="avatar" class="rounded-circle">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-2">
                      <p class="mb-0">Marvin Wheeler</p>
                      <p class="mb-0 text-muted">rumet@jujpejah.net</p>
                    </div>
                    <div class="dropdown">
                      <button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can Edit</span></button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-wrap mb-3">
                  <div class="avatar me-3">
                    <img src="../../assets/img/avatars/4.png" alt="avatar" class="rounded-circle">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-2">
                      <p class="mb-0">Nannie Ford</p>
                      <p class="mb-0 text-muted">negza@nuv.io</p>
                    </div>
                    <div class="dropdown">
                      <button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can Comment</span> </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-wrap mb-3">
                  <div class="avatar me-3">
                    <img src="../../assets/img/avatars/5.png" alt="avatar" class="rounded-circle">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-2">
                      <p class="mb-0">Julian Murphy</p>
                      <p class="mb-0 text-muted">lunebame@umdomgu.net</p>
                    </div>
                    <div class="dropdown">
                      <button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can View</span></button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-wrap mb-3">
                  <div class="avatar me-3">
                    <img src="../../assets/img/avatars/6.png" alt="avatar" class="rounded-circle">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-2">
                      <p class="mb-0">Sophie Gilbert</p>
                      <p class="mb-0 text-muted">ha@sugit.gov</p>
                    </div>
                    <div class="dropdown">
                      <button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can View</span> </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-wrap mb-3">
                  <div class="avatar me-3">
                    <img src="../../assets/img/avatars/7.png" alt="avatar" class="rounded-circle">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-2">
                      <p class="mb-0">Chris Watkins</p>
                      <p class="mb-0 text-muted">zokap@mak.org</p>
                    </div>
                    <div class="dropdown">
                      <button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can Comment</span> </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-wrap">
                  <div class="avatar me-3">
                    <img src="../../assets/img/avatars/8.png" alt="avatar" class="rounded-circle">
                  </div>
                  <div class="d-flex justify-content-between flex-grow-1">
                    <div class="me-2">
                      <p class="mb-0">Adelaide Nichols</p>
                      <p class="mb-0 text-muted">ujinomu@jigo.com</p>
                    </div>
                    <div class="dropdown">
                      <button type="button" class="btn dropdown-toggle p-2" data-bs-toggle="dropdown" aria-expanded="false"><span class="text-muted fw-normal me-2 d-none d-sm-inline-block">Can Edit</span> </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Owner</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can Comment</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0);">Can View</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="d-flex align-items-start mt-4 align-items-sm-center">
                <i class="ti ti-users me-2"></i>
                <div class="d-flex justify-content-between flex-grow-1 align-items-center flex-wrap gap-2">
                  <h6 class="mb-0">Public to Vuexy - Pixinvent</h6>
                  <button class="btn btn-primary">Copy Project Link</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Share Project Modal -->
        
        <!-- Create App Modal -->
        <div class="modal fade" id="createApp" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body p-2">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center">
                  <h3 class="mb-2">Create App</h3>
                  <p>Provide data with this form to create your app.</p>
                </div>
                <div id="wizard-create-app" class="bs-stepper vertical mt-2 shadow-none">
                  <div class="bs-stepper-header border-0 p-1">
                    <div class="step" data-target="#details">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="ti ti-file-text ti-sm"></i></span>
                        <span class="bs-stepper-label">
                          <span class="bs-stepper-title text-uppercase">Details</span>
                          <span class="bs-stepper-subtitle">Enter Details</span>
                        </span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#frameworks">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="ti ti-box ti-sm"></i></span>
                        <span class="bs-stepper-label">
                          <span class="bs-stepper-title text-uppercase">Frameworks</span>
                          <span class="bs-stepper-subtitle">Select Framework</span>
                        </span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#database">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="ti ti-database ti-sm"></i></span>
                        <span class="bs-stepper-label">
                          <span class="bs-stepper-title text-uppercase">Database</span>
                          <span class="bs-stepper-subtitle">Select Database</span>
                        </span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#billing">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="ti ti-credit-card ti-sm"></i></span>
                        <span class="bs-stepper-label">
                          <span class="bs-stepper-title text-uppercase">Billing</span>
                          <span class="bs-stepper-subtitle">Payment Details</span>
                        </span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#submit">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="ti ti-check ti-sm"></i></span>
                        <span class="bs-stepper-label">
                          <span class="bs-stepper-title text-uppercase">Submit</span>
                          <span class="bs-stepper-subtitle">Submit</span>
                        </span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content p-1">
                    <form onSubmit="return false">
                      <!-- Details -->
                      <div id="details" class="content pt-3 pt-lg-0">
                        <div class="mb-3">
                          <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Application Name">
                        </div>
                        <h5>Category</h5>
                        <ul class="p-0 m-0">
                          <li class="d-flex align-items-start mb-3">
                            <div class="badge bg-label-info p-2 me-3 rounded"><i class="ti ti-file-text ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="me-2">
                                <h6 class="mb-0">CRM Application</h6>
                                <small class="text-muted">Scales with any business</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="form-check form-check-inline">
                                  <input name="details-radio" class="form-check-input" type="radio" value="" />
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex align-items-start mb-3">
                            <div class="badge bg-label-success p-2 me-3 rounded"><i class="ti ti-shopping-cart ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="me-2">
                                <h6 class="mb-0">eCommerce Platforms</h6>
                                <small class="text-muted">Grow Your Business With App</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="form-check form-check-inline">
                                  <input name="details-radio" class="form-check-input" type="radio" value="" checked />
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex align-items-start">
                            <div class="badge bg-label-danger p-2 me-3 rounded"><i class="ti ti-device-laptop ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="me-2">
                                <h6 class="mb-0">Online Learning platform</h6>
                                <small class="text-muted">Start learning today</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="form-check form-check-inline">
                                  <input name="details-radio" class="form-check-input" type="radio" value="" />
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="col-12 d-flex justify-content-between mt-4">
                          <button class="btn btn-label-secondary btn-prev" disabled> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                          </button>
                          <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                        </div>
                      </div>
        
                      <!-- Frameworks -->
                      <div id="frameworks" class="content pt-3 pt-lg-0">
                        <h5>Category</h5>
                        <ul class="p-0 m-0">
                          <li class="d-flex align-items-start mb-3">
                            <div class="badge bg-label-info p-2 me-3 rounded"><i class="ti ti-brand-react-native ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="me-2">
                                <h6 class="mb-0">React Native</h6>
                                <small class="text-muted">Create truly native apps</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="form-check form-check-inline">
                                  <input name="frameworks-radio" class="form-check-input" type="radio" value="" />
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex align-items-start mb-3">
                            <div class="badge bg-label-danger p-2 me-3 rounded"><i class="ti ti-brand-angular ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="me-2">
                                <h6 class="mb-0">Angular</h6>
                                <small class="text-muted">Most suited for your application</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="form-check form-check-inline">
                                  <input name="frameworks-radio" class="form-check-input" type="radio" value="" checked="" />
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex align-items-start mb-3">
                            <div class="badge bg-label-warning p-2 me-3 rounded"><i class="ti ti-brand-html5 ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="me-2">
                                <h6 class="mb-0">HTML</h6>
                                <small class="text-muted">Progressive Framework</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="form-check form-check-inline">
                                  <input name="frameworks-radio" class="form-check-input" type="radio" value="" checked />
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex align-items-start">
                            <div class="badge bg-label-success p-2 me-3 rounded"><i class="ti ti-brand-vue ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="me-2">
                                <h6 class="mb-0">VueJs</h6>
                                <small class="text-muted">JS web frameworks</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="form-check form-check-inline">
                                  <input name="frameworks-radio" class="form-check-input" type="radio" value="" />
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
        
                        <div class="col-12 d-flex justify-content-between mt-4">
                          <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                          <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                        </div>
                      </div>
        
                      <!-- Database -->
                      <div id="database" class="content pt-3 pt-lg-0">
                        <div class="mb-3">
                          <input type="email" class="form-control form-control-lg" id="exampleInputEmail2" placeholder="Database Name">
                        </div>
                        <h5>Select Database Engine</h5>
                        <ul class="p-0 m-0">
                          <li class="d-flex align-items-start mb-3">
                            <div class="badge bg-label-danger p-2 me-3 rounded"><i class="ti ti-brand-firebase ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="me-2">
                                <h6 class="mb-0">Firebase</h6>
                                <small class="text-muted">Cloud Firestone</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="form-check form-check-inline">
                                  <input name="database-radio" class="form-check-input" type="radio" value="" />
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex align-items-start mb-3">
                            <div class="badge bg-label-warning p-2 me-3 rounded"><i class="ti ti-brand-amazon ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="me-2">
                                <h6 class="mb-0">AWS</h6>
                                <small class="text-muted">Amazon Fast NoSQL Database</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="form-check form-check-inline">
                                  <input name="database-radio" class="form-check-input" type="radio" value="" checked />
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex align-items-start">
                            <div class="badge bg-label-info p-2 me-3 rounded"><i class="ti ti-database ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100">
                              <div class="me-2">
                                <h6 class="mb-0">MySQL</h6>
                                <small class="text-muted">Basic MySQL database</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <div class="form-check form-check-inline">
                                  <input name="database-radio" class="form-check-input" type="radio" value="" />
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="col-12 d-flex justify-content-between mt-4">
                          <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                          <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                        </div>
                      </div>
        
                      <!-- billing -->
                      <div id="billing" class="content">
                        <div id="AppNewCCForm" class="row g-3 pt-3 pt-lg-0" onsubmit="return false">
                          <div class="col-12">
                            <div class="input-group input-group-merge">
                              <input class="form-control app-credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAppAddCard" />
                              <span class="input-group-text cursor-pointer p-1" id="modalAppAddCard"><span class="app-card-type"></span></span>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <input type="text" class="form-control" placeholder="John Doe" />
                          </div>
                          <div class="col-6 col-md-3">
                            <input type="text" class="form-control app-expiry-date-mask" placeholder="MM/YY" />
                          </div>
                          <div class="col-6 col-md-3">
                            <div class="input-group input-group-merge">
                              <input type="text" id="modalAppAddCardCvv" class="form-control app-cvv-code-mask" maxlength="3" placeholder="654" />
                              <span class="input-group-text cursor-pointer" id="modalAppAddCardCvv2"><i class="text-muted ti ti-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                            </div>
                          </div>
                          <div class="col-12">
                            <label class="switch">
                              <input type="checkbox" class="switch-input" checked>
                              <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                              </span>
                              <span class="switch-label">Save card for future billing?</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between mt-5">
                          <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                          <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                        </div>
                      </div>
        
                      <!-- submit -->
                      <div id="submit" class="content text-center pt-3 pt-lg-0">
                        <h5 class="mb-2 mt-3">Submit</h5>
                        <p>Submit to kick start your project.</p>
                        <!-- image -->
                        <img src="../../assets/img/illustrations/girl-with-laptop.png" class="img-fluid" alt="Create App img" width="175">
                        <div class="col-12 d-flex justify-content-between mt-4 pt-2">
                          <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                          <button class="btn btn-success btn-next btn-submit" data-bs-dismiss="modal" aria-label="Close"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Submit</span> <i class="ti ti-check ti-xs"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Create App Modal -->
        
        <!-- Two Factor Auth Modal -->
        
        <div class="modal fade" id="twoFactorAuth" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                  <h3 class="mb-2">Select Authentication Method</h3>
                  <p class="text-muted">You also need to select a method by which the proxy authenticates to the directory serve.</p>
                </div>
                <div class="row">
                  <div class="col-12 mb-3">
                    <div class="form-check custom-option custom-option-basic">
                      <label class="form-check-label custom-option-content ps-3" for="customRadioTemp1" data-bs-target="#twoFactorAuthOne" data-bs-toggle="modal">
                        <input name="customRadioTemp" class="form-check-input d-none" type="radio" value="" id="customRadioTemp1" />
                        <span class="d-flex align-items-start">
                          <i class="ti ti-settings ti-xl me-3"></i>
                          <span>
                            <span class="custom-option-header">
                              <span class="h4 mb-2">Authenticator Apps</span>
                            </span>
                            <span class="custom-option-body">
                              <span class="mb-0">Get code from an app like Google Authenticator or Microsoft Authenticator.</span>
                            </span>
                          </span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check custom-option custom-option-basic">
                      <label class="form-check-label custom-option-content ps-3" for="customRadioTemp2" data-bs-target="#twoFactorAuthTwo" data-bs-toggle="modal">
                        <input name="customRadioTemp" class="form-check-input d-none" type="radio" value="" id="customRadioTemp2" />
                        <span class="d-flex align-items-start">
                          <i class="ti ti-message ti-xl me-3"></i>
                          <span>
                            <span class="custom-option-header">
                              <span class="h4 mb-2">SMS</span>
                            </span>
                            <span class="custom-option-body">
                              <span class="mb-0">We will send a code via SMS if you need to use your backup login method.</span>
                            </span>
                          </span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal Authentication App -->
        <div class="modal fade" id="twoFactorAuthOne" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-2">
                  <h3 class="mb-0">Add Authenticator App</h3>
                </div>
                <h5 class="mb-2 pt-1 text-break">Authenticator Apps</h5>
                <p class="mb-4">Using an authenticator app like Google Authenticator, Microsoft Authenticator, Authy, or 1Password, scan the QR code. It will generate a 6-digit code for you to enter below.</p>
                <div class="text-center">
                  <img src="../../assets/img/icons/misc/authentication-QR.png" alt="QR Code" width="140">
                </div>
                <div class="alert alert-warning alert-dismissible my-3" role="alert">
                  <h5 class="alert-heading mb-2 text-break">ASDLKNASDA9AHS678dGhASD78AB</h5>
                  <p class="mb-0">If you're having trouble using the QR code, select manual entry on your app</p>
                </div>
                <div class="mb-4">
                  <input type="email" class="form-control" id="twoFactorAuthInput" placeholder="Enter Authentication Code">
                </div>
                <div class="text-end">
                  <button type="button" class="btn btn-label-secondary me-sm-3 me-1" data-bs-toggle="modal" data-bs-target="#twoFactorAuth"><i class="ti ti-arrow-left ti-xs me-1 scaleX-n1-rtl"></i><span class="align-middle d-none d-sm-inline-block">Back</span></button>
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close"><span class="align-middle d-none d-sm-inline-block">Continue</span><i class="ti ti-arrow-right ti-xs ms-1 scaleX-n1-rtl"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal Authentication via SMS -->
        <div class="modal fade" id="twoFactorAuthTwo" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="mb-2 pt-1">Verify Your Mobile Number for SMS</h5>
                <p class="mb-4">Enter your mobile phone number with country code, and we will send you a verification code.</p>
                <div class="mb-4">
                  <input type="text" class="form-control" id="twoFactorAuthInputSms" placeholder="747 875 3459">
                </div>
                <div class="text-end">
                  <button type="button" class="btn btn-label-secondary me-sm-3 me-1" data-bs-toggle="modal" data-bs-target="#twoFactorAuth"><i class="ti ti-arrow-left ti-xs me-1 scaleX-n1-rtl"></i><span class="align-middle d-none d-sm-inline-block">Back</span></button>
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close"><span class="align-middle d-none d-sm-inline-block">Continue</span><i class="ti ti-arrow-right ti-xs ms-1 scaleX-n1-rtl"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Two Factor Auth Modal -->
        
        <!-- Payment provider modal -->
        <div class="modal fade" id="paymentProvider" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                  <h3 class="mb-3">Select payment providers</h3>
                  <p class="text-muted">Third-party payment providers</p>
                </div>
        
                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-3 mb-3">
        
                  <h6 class="m-0 mb-2 mb-sm-0 me-5">Adyen</h6>
                  <div class="d-flex flex-wrap gap-2">
                    <img src="../../assets/img/icons/payments/visa-light.png" class="img-fluid w-px-50 h-px-30" alt="visa-card" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png" />
                    <img src="../../assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="master-card" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png" />
                    <img src="../../assets/img/icons/payments/ae-light.png" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
                    <img src="../../assets/img/icons/payments/jcb-light.png" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
                    <img src="../../assets/img/icons/payments/dc-light.png" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
                  </div>
                </div>
                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-3 mb-3">
        
                  <h6 class="m-0 mb-2 mb-sm-0">2Checkout</h6>
                  <div class="d-flex flex-wrap gap-2">
                    <img src="../../assets/img/icons/payments/visa-light.png" class="img-fluid w-px-50 h-px-30" alt="visa-card" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png" />
                    <img src="../../assets/img/icons/payments/ae-light.png" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
                    <img src="../../assets/img/icons/payments/jcb-light.png" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
                    <img src="../../assets/img/icons/payments/dc-light.png" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
                  </div>
                </div>
                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-3 mb-3">
                  <h6 class="m-0 mb-2 mb-sm-0">Airpay</h6>
                  <div class="d-flex flex-wrap gap-2">
                    <img src="../../assets/img/icons/payments/visa-light.png" class="img-fluid w-px-50 h-px-30" alt="visa-card" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png" />
                    <img src="../../assets/img/icons/payments/ae-light.png" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
                    <img src="../../assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="master-card" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png" />
                    <img src="../../assets/img/icons/payments/jcb-light.png" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
        
                  </div>
                </div>
                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-3 mb-3">
                  <h6 class="m-0 mb-2 mb-sm-0">Authorize.net</h6>
        
                  <div class="d-flex flex-wrap gap-2">
                    <img src="../../assets/img/icons/payments/ae-light.png" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
                    <img src="../../assets/img/icons/payments/jcb-light.png" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
                    <img src="../../assets/img/icons/payments/dc-light.png" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
                  </div>
                </div>
                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-3 mb-3">
                  <h6 class="m-0 mb-2 mb-sm-0">Bambora</h6>
        
                  <div class="d-flex flex-wrap gap-2">
        
                    <img src="../../assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="master-card" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png" />
                    <img src="../../assets/img/icons/payments/ae-light.png" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
                    <img src="../../assets/img/icons/payments/jcb-light.png" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
        
                  </div>
                </div>
                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-3 mb-3">
                  <h6 class="m-0 mb-2 mb-sm-0">Cayan</h6>
        
                  <div class="d-flex flex-wrap gap-2">
                    <img src="../../assets/img/icons/payments/visa-light.png" class="img-fluid w-px-50 h-px-30" alt="visa-card" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png" />
                    <img src="../../assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="master-card" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png" />
                    <img src="../../assets/img/icons/payments/ae-light.png" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
                    <img src="../../assets/img/icons/payments/jcb-light.png" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
                    <img src="../../assets/img/icons/payments/dc-light.png" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
                  </div>
                </div>
                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-3 mb-3">
                  <h6 class="m-0 mb-2 mb-sm-0">Chase Paymentech (Orbital)</h6>
        
                  <div class="d-flex flex-wrap gap-2">
                    <img src="../../assets/img/icons/payments/visa-light.png" class="img-fluid w-px-50 h-px-30" alt="visa-card" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png" />
                    <img src="../../assets/img/icons/payments/ae-light.png" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
                    <img src="../../assets/img/icons/payments/jcb-light.png" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
                    <img src="../../assets/img/icons/payments/dc-light.png" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
                  </div>
                </div>
                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between border-bottom pb-3">
                  <h6 class="m-0 mb-2 mb-sm-0">Checkout.com</h6>
                  <div class="d-flex flex-wrap gap-2">
                    <img src="../../assets/img/icons/payments/visa-light.png" class="img-fluid w-px-50 h-px-30" alt="visa-card" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png" />
                    <img src="../../assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="master-card" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png" />
                  </div>
                </div>
        
        
              </div>
            </div>
          </div>
        </div>
        <!-- / Payment provider modal -->
        
        <!-- Payment Methods modal -->
        <div class="modal fade" id="paymentMethods" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                  <h3 class="mb-3">Select payment methods</h3>
                  <p class="text-muted">Supported payment methods</p>
                </div>
        
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                  <div class="d-flex gap-2 align-items-center">
        
                    <img src="../../assets/img/icons/payments/visa-light.png" class="img-fluid w-px-50 h-px-30" alt="visa-card" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png" />
        
                    <h6 class="m-0">Visa</h6>
                  </div>
                  <h6 class="m-0 d-none d-sm-block">Credit Card</h6>
                </div>
                <div class="d-flex justify-content-sm-between align-items-center border-bottom pb-3 mb-3">
                  <div class="d-flex gap-2 align-items-center">
        
                    <img src="../../assets/img/icons/payments/ae-light.png" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.png" />
        
                    <h6 class="m-0">American Express</h6>
                  </div>
                  <h6 class="m-0 d-none d-sm-block">Credit Card</h6>
                </div>
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                  <div class="d-flex gap-2 align-items-center">
        
                    <img src="../../assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="master-card" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png" />
        
                    <h6 class="m-0">Mastercard</h6>
                  </div>
                  <h6 class="m-0 d-none d-sm-block">Credit Card</h6>
                </div>
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                  <div class="d-flex gap-2 align-items-center">
                    <img src="../../assets/img/icons/payments/jcb-light.png" class="img-fluid w-px-50 h-px-30" alt="jcb-card" data-app-light-img="icons/payments/jcb-light.png" data-app-dark-img="icons/payments/jcb-dark.png" />
                    <h6 class="m-0">JCB</h6>
                  </div>
                  <h6 class="m-0 d-none d-sm-block">Credit Card</h6>
                </div>
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3">
                  <div class="d-flex gap-2 align-items-center">
                    <img src="../../assets/img/icons/payments/dc-light.png" class="img-fluid w-px-50 h-px-30" alt="diners-club-card" data-app-light-img="icons/payments/dc-light.png" data-app-dark-img="icons/payments/dc-dark.png" />
                    <h6 class="m-0">Diners Club</h6>
                  </div>
                  <h6 class="m-0 d-none d-sm-block">Credit Card</h6>
                </div>
        
              </div>
            </div>
          </div>
        </div>
        <!-- / Payment Methods modal -->
        
        
        
                  </div>
                  <!-- / Content -->
        
                  
                  
        
        
        
                  
                  <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
              </div>
              <!-- / Layout page -->
            </div>
          
        </body>

@stop