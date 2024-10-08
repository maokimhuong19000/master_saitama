@include('backend.layouts.pheader')

  <body>
    <div id="root">
      @include('backend.layouts.left_side_bar')

      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div class="w-auto sw-md-30">
                  <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                    <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                    <span class="text-small align-middle">Customers</span>
                  </a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Customer Detail</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="col-12 col-md-5 d-flex align-items-end justify-content-end">
                <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto">
                  <i data-acorn-icon="save"></i>
                  <span>Update</span>
                </button>

                <!-- Dropdown Button Start -->
                <div class="ms-1">
                  <button
                    type="button"
                    class="btn btn-outline-primary btn-icon btn-icon-only"
                    data-bs-offset="0,3"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-submenu
                  >
                    <i data-acorn-icon="more-horizontal"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <button class="dropdown-item" type="button">Edit</button>
                    <button class="dropdown-item" type="button">View Purchases</button>
                    <button class="dropdown-item" type="button">Check Ip</button>
                  </div>
                </div>
                <!-- Dropdown Button End -->
              </div>
              <!-- Top Buttons End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <div class="row gx-4 gy-5">
            <!-- Customer Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
              <h2 class="small-title">Info</h2>
              <div class="card">
                <div class="card-body mb-n5">
                  <div class="d-flex align-items-center flex-column">
                    <div class="mb-5 d-flex align-items-center flex-column">
                      <div class="sw-6 sh-6 mb-3 d-inline-block bg-primary d-flex justify-content-center align-items-center rounded-xl">
                        <div class="text-white">BC</div>
                      </div>
                      <div class="h5 mb-1">Blaine Cottrell</div>
                      <div class="text-muted">
                        <i data-acorn-icon="pin" class="text-muted"></i>
                        <span class="align-middle">Montreal, Canada</span>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100 mb-5">
                      <button type="button" class="btn btn-primary w-100 me-2">Edit</button>
                      <button type="button" class="btn btn-outline-primary w-100 me-2">Block</button>
                      <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                        <i data-acorn-icon="more-horizontal"></i>
                      </button>
                    </div>
                  </div>
                  <div class="mb-5">
                    <div class="row g-0 align-items-center mb-2">
                      <div class="col-auto">
                        <div class="border border-primary sw-5 sh-5 rounded-xl d-flex justify-content-center align-items-center">
                          <i data-acorn-icon="credit-card" class="text-primary"></i>
                        </div>
                      </div>
                      <div class="col ps-3">
                        <div class="row g-0">
                          <div class="col">
                            <div class="sh-5 d-flex align-items-center lh-1-25">Lifetime Spent</div>
                          </div>
                          <div class="col-auto">
                            <div class="sh-5 d-flex align-items-center">$ 5,325.55</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center mb-2">
                      <div class="col-auto">
                        <div class="border border-primary sw-5 sh-5 rounded-xl d-flex justify-content-center align-items-center">
                          <i data-acorn-icon="cart" class="text-primary"></i>
                        </div>
                      </div>
                      <div class="col ps-3">
                        <div class="row g-0">
                          <div class="col">
                            <div class="sh-5 d-flex align-items-center lh-1-25">Avarage Order</div>
                          </div>
                          <div class="col-auto">
                            <div class="sh-5 d-flex align-items-center">$ 590.50</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center mb-2">
                      <div class="col-auto">
                        <div class="border border-primary sw-5 sh-5 rounded-xl d-flex justify-content-center align-items-center">
                          <i data-acorn-icon="boxes" class="text-primary"></i>
                        </div>
                      </div>
                      <div class="col ps-3">
                        <div class="row g-0">
                          <div class="col">
                            <div class="sh-5 d-flex align-items-center lh-1-25">Order Count</div>
                          </div>
                          <div class="col-auto">
                            <div class="sh-5 d-flex align-items-center">17</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-5">
                    <div>
                      <p class="text-small text-muted mb-2">SHIPPING ADDRESS</p>
                      <div class="row g-0 mb-2">
                        <div class="col-auto">
                          <div class="sw-3 me-1">
                            <i data-acorn-icon="user" class="text-primary" data-acorn-size="17"></i>
                          </div>
                        </div>
                        <div class="col text-alternate align-middle">Blaine Cottrell</div>
                      </div>
                      <div class="row g-0 mb-2">
                        <div class="col-auto">
                          <div class="sw-3 me-1">
                            <i data-acorn-icon="pin" class="text-primary" data-acorn-size="17"></i>
                          </div>
                        </div>
                        <div class="col text-alternate">4 Glamis Avenue, Strathmore Park, Wellington 6022, New Zealand</div>
                      </div>
                      <div class="row g-0 mb-2">
                        <div class="col-auto">
                          <div class="sw-3 me-1">
                            <i data-acorn-icon="phone" class="text-primary" data-acorn-size="17"></i>
                          </div>
                        </div>
                        <div class="col text-alternate">+6443884455</div>
                      </div>
                      <div class="row g-0 mb-2">
                        <div class="col-auto">
                          <div class="sw-3 me-1">
                            <i data-acorn-icon="email" class="text-primary" data-acorn-size="17"></i>
                          </div>
                        </div>
                        <div class="col text-alternate">blaine@cottrell.com</div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-5">
                    <div>
                      <p class="text-small text-muted mb-2">BILLING ADDRESS</p>
                      <div class="row g-0 mb-2">
                        <div class="col-auto">
                          <div class="sw-3 me-1">
                            <i data-acorn-icon="user" class="text-primary" data-acorn-size="17"></i>
                          </div>
                        </div>
                        <div class="col text-alternate align-middle">Blaine Cottrell</div>
                      </div>
                      <div class="row g-0 mb-2">
                        <div class="col-auto">
                          <div class="sw-3 me-1">
                            <i data-acorn-icon="pin" class="text-primary" data-acorn-size="17"></i>
                          </div>
                        </div>
                        <div class="col text-alternate">4 Glamis Avenue, Strathmore Park, Wellington 6022, New Zealand</div>
                      </div>
                      <div class="row g-0 mb-2">
                        <div class="col-auto">
                          <div class="sw-3 me-1">
                            <i data-acorn-icon="phone" class="text-primary" data-acorn-size="17"></i>
                          </div>
                        </div>
                        <div class="col text-alternate">+6443884455</div>
                      </div>
                      <div class="row g-0 mb-2">
                        <div class="col-auto">
                          <div class="sw-3 me-1">
                            <i data-acorn-icon="email" class="text-primary" data-acorn-size="17"></i>
                          </div>
                        </div>
                        <div class="col text-alternate">blaine@cottrell.com</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Customer End -->

            <div class="col-12 col-xl-8 col-xxl-9">
              <!-- Recent Orders Start -->
              <div class="d-flex justify-content-between">
                <h2 class="small-title">Recent Orders</h2>
                <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                  <span class="align-bottom">View All</span>
                  <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                </button>
              </div>
              <div class="mb-5">
                <div class="card mb-2">
                  <div class="row g-0 sh-16 sh-md-8">
                    <div class="col">
                      <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                          <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 h-md-100">
                            <div class="text-muted text-small d-md-none">Id</div>
                            <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">1239</a>
                          </div>
                          <div class="col-6 col-md-4 d-flex flex-column justify-content-center mb-2 mb-md-0">
                            <div class="text-muted text-small d-md-none">Price</div>
                            <div class="text-alternate">
                              <span>
                                <span class="text-small">$</span>
                                321.75
                              </span>
                            </div>
                          </div>
                          <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0">
                            <div class="text-muted text-small d-md-none">Date</div>
                            <div class="text-alternate">13.09.2020</div>
                          </div>
                          <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 align-items-md-end">
                            <div class="text-muted text-small d-md-none">Status</div>
                            <div class="text-alternate">
                              <span class="badge rounded-pill bg-outline-secondary">PENDING</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="row g-0 sh-16 sh-md-8">
                    <div class="col">
                      <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                          <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 h-md-100">
                            <div class="text-muted text-small d-md-none">Id</div>
                            <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">1251</a>
                          </div>
                          <div class="col-6 col-md-4 d-flex flex-column justify-content-center mb-2 mb-md-0">
                            <div class="text-muted text-small d-md-none">Price</div>
                            <div class="text-alternate">
                              <span>
                                <span class="text-small">$</span>
                                59.00
                              </span>
                            </div>
                          </div>
                          <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0">
                            <div class="text-muted text-small d-md-none">Date</div>
                            <div class="text-alternate">14.09.2020</div>
                          </div>
                          <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 align-items-md-end">
                            <div class="text-muted text-small d-md-none">Status</div>
                            <div class="text-alternate">
                              <span class="badge rounded-pill bg-outline-primary">DELIVERED</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="row g-0 sh-16 sh-md-8">
                    <div class="col">
                      <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                          <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 h-md-100">
                            <div class="text-muted text-small d-md-none">Id</div>
                            <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">1397</a>
                          </div>
                          <div class="col-6 col-md-4 d-flex flex-column justify-content-center mb-2 mb-md-0">
                            <div class="text-muted text-small d-md-none">Price</div>
                            <div class="text-alternate">
                              <span>
                                <span class="text-small">$</span>
                                128.25
                              </span>
                            </div>
                          </div>
                          <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0">
                            <div class="text-muted text-small d-md-none">Date</div>
                            <div class="text-alternate">17.09.2020</div>
                          </div>
                          <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 align-items-md-end">
                            <div class="text-muted text-small d-md-none">Status</div>
                            <div class="text-alternate">
                              <span class="badge rounded-pill bg-outline-primary">DELIVERED</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="row g-0 sh-16 sh-md-8">
                    <div class="col">
                      <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                          <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 h-md-100">
                            <div class="text-muted text-small d-md-none">Id</div>
                            <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">1421</a>
                          </div>
                          <div class="col-6 col-md-4 d-flex flex-column justify-content-center mb-2 mb-md-0">
                            <div class="text-muted text-small d-md-none">Price</div>
                            <div class="text-alternate">
                              <span>
                                <span class="text-small">$</span>
                                252.75
                              </span>
                            </div>
                          </div>
                          <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0">
                            <div class="text-muted text-small d-md-none">Date</div>
                            <div class="text-alternate">17.09.2020</div>
                          </div>
                          <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 align-items-md-end">
                            <div class="text-muted text-small d-md-none">Status</div>
                            <div class="text-alternate">
                              <span class="badge rounded-pill bg-outline-primary">DELIVERED</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="row g-0 sh-16 sh-md-8">
                    <div class="col">
                      <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                          <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 h-md-100">
                            <div class="text-muted text-small d-md-none">Id</div>
                            <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">1438</a>
                          </div>
                          <div class="col-6 col-md-4 d-flex flex-column justify-content-center mb-2 mb-md-0">
                            <div class="text-muted text-small d-md-none">Price</div>
                            <div class="text-alternate">
                              <span>
                                <span class="text-small">$</span>
                                189.50
                              </span>
                            </div>
                          </div>
                          <div class="col-6 col-md-2 d-flex flex-column justify-content-center mb-2 mb-md-0">
                            <div class="text-muted text-small d-md-none">Date</div>
                            <div class="text-alternate">18.09.2020</div>
                          </div>
                          <div class="col-6 col-md-3 d-flex flex-column justify-content-center mb-2 mb-md-0 align-items-md-end">
                            <div class="text-muted text-small d-md-none">Status</div>
                            <div class="text-alternate">
                              <span class="badge rounded-pill bg-outline-primary">DELIVERED</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Recent Orders End -->

              <!-- Activity Start -->
              <h2 class="small-title">History</h2>
              <div class="card mb-5">
                <div class="card-body">
                  <div class="row g-0">
                    <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                      <div class="w-100 d-flex sh-1"></div>
                      <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                        <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                      </div>
                      <div class="w-100 d-flex h-100 justify-content-center position-relative">
                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="h-100">
                        <div class="d-flex flex-column justify-content-start">
                          <div class="d-flex flex-column">
                            <a href="#" class="heading stretched-link">New Order</a>
                            <div class="text-alternate">21.02.2021</div>
                            <div class="text-muted mt-1">Biscuit donut powder sugar plum pastry. Chupa chups topping pastry halvah.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0">
                    <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                      <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                      </div>
                      <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                        <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                      </div>
                      <div class="w-100 d-flex h-100 justify-content-center position-relative">
                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="h-100">
                        <div class="d-flex flex-column justify-content-start">
                          <div class="d-flex flex-column">
                            <a href="#" class="heading stretched-link">New Order</a>
                            <div class="text-alternate">18.02.2021</div>
                            <div class="text-muted mt-1">Apple pie cotton candy tiramisu biscuit cake muffin tootsie roll bear claw cake.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0">
                    <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                      <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                      </div>
                      <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                        <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                      </div>
                      <div class="w-100 d-flex h-100 justify-content-center position-relative">
                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="h-100">
                        <div class="d-flex flex-column justify-content-start">
                          <div class="d-flex flex-column">
                            <a href="#" class="heading stretched-link">New Order</a>
                            <div class="text-alternate">15.02.2021</div>
                            <div class="text-muted mt-1">
                              Marzipan muffin cheesecake. Caramels wafer jelly beans. Icing pudding dessert caramels cake topping marzipan.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0">
                    <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                      <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                      </div>
                      <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                        <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                      </div>
                      <div class="w-100 d-flex h-100 justify-content-center position-relative">
                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                      </div>
                    </div>
                    <div class="col mb-4">
                      <div class="h-100">
                        <div class="d-flex flex-column justify-content-start">
                          <div class="d-flex flex-column">
                            <a href="#" class="heading stretched-link">New Order</a>
                            <div class="text-alternate">12.02.2021</div>
                            <div class="text-muted mt-1">Dragée macaroon lemon drops icing cupcake gingerbread. Apple pie caramels tart.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0">
                    <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                      <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                      </div>
                      <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                        <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                      </div>
                      <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                    </div>
                    <div class="col">
                      <div class="h-100">
                        <div class="d-flex flex-column justify-content-start">
                          <div class="d-flex flex-column">
                            <a href="#" class="heading stretched-link">Registered</a>
                            <div class="text-alternate">12.02.2021</div>
                            <div class="text-muted mt-1">Marshmallow donut sweet roll. Wafer tootsie roll gingerbread croissant ice cream.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Activity End -->

              <!-- Additional Info Start -->
              <h2 class="small-title">Additional Info</h2>
              <div class="card mb-5">
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Tags</label>
                      <input name="tagsBasic" value="Rates, Sales Shopper, Newsletter" />
                    </div>
                    <div class="mb-0">
                      <label class="form-label">Notes</label>
                      <textarea rows="4" class="form-control">
Very cool person!
Rates the items a lot.</textarea
                      >
                    </div>
                  </form>
                </div>
              </div>
              <!-- Additional Info End -->
            </div>
          </div>
        </div>
      </main>

      <!-- Layout Footer Start -->
      <footer>
        <div class="footer-content">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-6">
                <p class="mb-0 text-muted text-medium">Colored Strategies 2021</p>
              </div>
              <div class="col-sm-6 d-none d-sm-block">
                <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                  <li class="breadcrumb-item mb-0 text-medium">
                    <a href="https://1.envato.market/BX5oGy" target="_blank" class="btn-link">Review</a>
                  </li>
                  <li class="breadcrumb-item mb-0 text-medium">
                    <a href="https://1.envato.market/BX5oGy" target="_blank" class="btn-link">Purchase</a>
                  </li>
                  <li class="breadcrumb-item mb-0 text-medium">
                    <a href="https://acorn-html-docs.coloredstrategies.com/" target="_blank" class="btn-link">Docs</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Layout Footer End -->
    </div>

    <!-- Theme Settings Modal Start -->
    <div
      class="modal fade modal-right scroll-out-negative"
      id="settings"
      data-bs-backdrop="true"
      tabindex="-1"
      role="dialog"
      aria-labelledby="settings"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable full" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="scroll-track-visible">
              <div class="mb-5" id="color">
                <label class="mb-3 d-inline-block form-label">Color</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="blue-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT BLUE</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="blue-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK BLUE</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-teal" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="teal-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT TEAL</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-teal" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="teal-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK TEAL</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-sky" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="sky-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT SKY</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-sky" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="sky-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK SKY</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-red" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="red-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT RED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="red-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK RED</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-green" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="green-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT GREEN</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="green-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK GREEN</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-lime" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="lime-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT LIME</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-lime" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="lime-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK LIME</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="pink-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT PINK</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="pink-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK PINK</span>
                    </div>
                  </a>
                </div>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="purple-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="purple-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK PURPLE</span>
                    </div>
                  </a>
                </div>
              </div>
              <div class="mb-5" id="navcolor">
                <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="default" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DEFAULT</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="light" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-secondary figure-light top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="dark" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-muted figure-dark top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="behaviour">
                <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="pinned" data-parent="behaviour">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left large"></div>
                      <div class="figure figure-secondary right small"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">PINNED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned" data-parent="behaviour">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left"></div>
                      <div class="figure figure-secondary right"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">UNPINNED</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="layout">
                <label class="mb-3 d-inline-block form-label">Layout</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="fluid" data-parent="layout">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">FLUID</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="boxed" data-parent="layout">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom small"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">BOXED</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="radius">
                <label class="mb-3 d-inline-block form-label">Radius</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="rounded" data-parent="radius">
                    <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">ROUNDED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="standard" data-parent="radius">
                    <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">STANDARD</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="flat" data-parent="radius">
                    <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">FLAT</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Theme Settings Modal End -->

    <!-- Niches Modal Start -->
    <div
      class="modal fade modal-right scroll-out-negative"
      id="niches"
      data-bs-backdrop="true"
      tabindex="-1"
      role="dialog"
      aria-labelledby="niches"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable full" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Niches</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="scroll-track-visible">
              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Classic Dashboard</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="https://acorn.coloredstrategies.com/img/page/classic-dashboard.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="https://acorn-html-classic-dashboard.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-laravel-classic-dashboard.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-dotnet-classic-dashboard.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Medical Assistant</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="https://acorn.coloredstrategies.com/img/page/medical-assistant.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="https://acorn-html-medical-assistant.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-laravel-medical-assistant.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-dotnet-medical-assistant.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Service Provider</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="https://acorn.coloredstrategies.com/img/page/service-provider.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="https://acorn-html-service-provider.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-laravel-service-provider.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-dotnet-service-provider.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Elearning Portal</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="https://acorn.coloredstrategies.com/img/page/elearning-portal.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="https://acorn-html-elearning-portal.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-laravel-elearning-portal.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-dotnet-elearning-portal.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Ecommerce Platform</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="https://acorn.coloredstrategies.com/img/page/ecommerce-platform.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="https://acorn-html-ecommerce-platform.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-laravel-ecommerce-platform.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-dotnet-ecommerce-platform.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <label class="mb-2 d-inline-block form-label">Starter Project</label>
                <div class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                  <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                    <img
                      src="https://acorn.coloredstrategies.com/img/page/starter-project.webp"
                      class="img-fluid rounded-sm lower-opacity border border-separator-light"
                      alt="card image"
                    />
                    <div class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                      <a
                        target="_blank"
                        href="https://acorn-html-starter-project.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Html
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-laravel-starter-project.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        Laravel
                      </a>
                      <a
                        target="_blank"
                        href="https://acorn-dotnet-starter-project.coloredstrategies.com/"
                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1"
                      >
                        .Net5
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Niches Modal End -->

    <!-- Theme Settings & Niches Buttons Start -->
    <div class="settings-buttons-container">
      <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
        <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Settings">
          <i data-acorn-icon="paint-roller" class="position-relative"></i>
        </span>
      </button>
      <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#niches" id="nichesButton">
        <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Niches">
          <i data-acorn-icon="toy" class="position-relative"></i>
        </span>
      </button>
    </div>
    <!-- Theme Settings & Niches Buttons End -->

    <!-- Search Modal Start -->
    <div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header border-0 p-0">
            <button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ps-5 pe-5 pb-0 border-0">
            <input id="searchPagesInput" class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text" autocomplete="off" />
          </div>
          <div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-acorn-icon="arrow-bottom" data-acorn-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Navigate</span>
            </span>
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-acorn-icon="arrow-bottom-left" data-acorn-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Select</span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Modal End -->

    @include('backend.layouts.footer')