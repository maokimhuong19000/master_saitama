@include('backend.layouts.header')

  <body>
    <div id="root">
      {{-- Left Side bar --}}

      @include('backend.layouts.left_side_bar')

      {{-- Left Side Bar End --}}

      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-12 col-md-7">
                <a class="muted-link pb-2 d-inline-block hidden" href="#">
                  <span class="align-middle lh-1 text-small">&nbsp;</span>
                </a>
                <h1 class="mb-0 pb-0 display-4" id="title">Welcome, Zayn!</h1>
              </div>
              <!-- Title End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <!-- Stats Start -->
          <div class="row">
            <div class="col-12">
              <div class="d-flex">
                <div class="dropdown-as-select me-3" data-setActive="false" data-childSelector="span">
                  <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                    <span class="small-title"></span>
                  </a>
                  <div class="dropdown-menu font-standard">
                    <div class="nav flex-column" role="tablist">
                      <a class="active dropdown-item text-medium" href="#" aria-selected="true" role="tab">Today's</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Weekly</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Monthly</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Yearly</a>
                    </div>
                  </div>
                </div>
                <h2 class="small-title">Stats</h2>
              </div>
              <div class="mb-5">
                <div class="row g-2">
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="dollar" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">EARNINGS</div>
                        <div class="text-primary cta-4">$ 315.20</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="cart" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">ORDERS</div>
                        <div class="text-primary cta-4">16</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="server" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">SESSIONS</div>
                        <div class="text-primary cta-4">463</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="user" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">USERS</div>
                        <div class="text-primary cta-4">17</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="arrow-top-left" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">RETURNS</div>
                        <div class="text-primary cta-4">2</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="message" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">COMMENTS</div>
                        <div class="text-primary cta-4">5</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Stats End -->

          <div class="row">
            <!-- Recent Orders Start -->
            <div class="col-xl-6 mb-5">
              <h2 class="small-title">Recent Orders</h2>
              <div class="mb-n2 scroll-out">
                <div class="scroll-by-count" data-count="6">
                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54129</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-primary me-1">PENDING</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            17.35
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 13:20</div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54128</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-primary me-1">PENDING</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            145.20
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 11:32</div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54127</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-primary me-1">PENDING</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            110.85
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 11:20</div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54126</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-primary me-1">PENDING</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            58.00
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 10:20</div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54125</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-secondary me-1">SHIPPED</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            22.05
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 07:30</div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54124</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-secondary me-1">SHIPPED</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            14.25
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 17:30</div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54123</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-quaternary me-1">DELIVERED</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            42.00
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 11:25</div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54122</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-quaternary me-1">DELIVERED</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            63.25
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 15:20</div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54121</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-quaternary me-1">DELIVERED</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            74.00
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 13:10</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Recent Orders End -->

            <!-- Performance Start -->
            <div class="col-xl-6 mb-5">
              <div class="d-flex">
                <div class="dropdown-as-select me-3" data-setActive="false" data-childSelector="span">
                  <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                    <span class="small-title"></span>
                  </a>
                  <div class="dropdown-menu font-standard">
                    <div class="nav flex-column" role="tablist">
                      <a class="active dropdown-item text-medium" href="#" aria-selected="true" role="tab">Today's</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Weekly</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Monthly</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Yearly</a>
                    </div>
                  </div>
                </div>
                <h2 class="small-title">Performance</h2>
              </div>
              <div class="card sh-45 h-xl-100-card">
                <div class="card-body h-100">
                  <div class="h-100">
                    <canvas id="horizontalTooltipChart"></canvas>
                    <div
                      class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex z-index-1 align-items-center opacity-0 basic-transform-transition"
                    >
                      <div
                        class="icon-container border d-flex align-middle align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl me-3"
                      >
                        <span class="icon"></span>
                      </div>
                      <div>
                        <span class="text d-flex align-middle text-alternate align-items-center text-small">Bread</span>
                        <span class="value d-flex align-middle text-body align-items-center cta-4">300</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Performance End -->
          </div>

          <div class="row gx-4 gy-5">
            <!-- Top Selling Items Start -->
            <div class="col-xl-6 mb-5">
              <h2 class="small-title">Top Selling Items</h2>
              <div class="scroll-out mb-n2">
                <div class="scroll-by-count" data-count="4">
                  <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                      <div class="col-auto">
                        <a href="Products.Detail.html">
                          <img src="{{asset('/backend/assets/img/product/small/product-3.webp')}}" alt="alternate text" class="card-img card-img-horizontal sw-11" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-9 d-flex align-items-center mb-2 mb-md-0">
                              <a href="Products.Detail.html">Good Glass Teapot</a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">4.024 Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                      <div class="col-auto">
                        <a href="Products.Detail.html">
                          <img src="{{asset('/backend/assets/img/product/small/product-2.webp')}}" alt="alternate text" class="card-img card-img-horizontal sw-11" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-9 d-flex align-items-center mb-2 mb-md-0">
                              <a href="Products.Detail.html">Aromatic Green Candle</a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">2.701 Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                      <div class="col-auto">
                        <a href="Products.Detail.html">
                          <img src="{{asset('/backend/assets/img/product/small/product-7.webp')}}" alt="alternate text" class="card-img card-img-horizontal sw-11" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-9 d-flex align-items-center mb-2 mb-md-0">
                              <a href="Products.Detail.html">White Coffee Mug</a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">1.972 Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                      <div class="col-auto">
                        <a href="Products.Detail.html">
                          <img src="{{asset('/backend/assets/img/product/small/product-6.webp')}}" alt="alternate text" class="card-img card-img-horizontal sw-11" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-9 d-flex align-items-center mb-2 mb-md-0">
                              <a href="Products.Detail.html">Wireless On-Ear Headphones</a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">1.543 Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                      <div class="col-auto">
                        <a href="Products.Detail.html">
                          <img src="{{asset('/backend/assets/img/product/small/product-8.webp')}}" alt="alternate text" class="card-img card-img-horizontal sw-11" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-9 d-flex align-items-center mb-2 mb-md-0">
                              <a href="Products.Detail.html">Geometric Chandelier</a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">1.352 Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Top Selling Items End -->

            <!-- Top Search Terms Start -->
            <div class="col-xl-6 mb-5">
              <h2 class="small-title">Top Search Terms</h2>
              <div class="card sh-35 h-xl-100-card">
                <div class="card-body scroll-out h-100">
                  <div class="scroll h-100">
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Whole wheat bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">847</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>White bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">753</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Sourdough bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">721</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Melonpan bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">693</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Gluten free bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">431</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>sliced whole wheat bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">381</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Packaged Zopf bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">310</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Barm cake</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">301</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Pita bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">288</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Taftan cake</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">219</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Top Search Terms End -->
          </div>

          <div class="row">
            <div class="col-12 col-xxl">
              <div class="row">
                <!-- Activity Start -->
                <div class="col-xxl-6 mb-5">
                  <h2 class="small-title">Activity</h2>
                  <div class="card sh-35">
                    <div class="card-body scroll-out h-100">
                      <div class="scroll h-100">
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="circle" class="text-primary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">New user registiration</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="circle" class="text-primary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">3 new product added</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="square" class="text-secondary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  Product out of stock:
                                  <a href="#" class="alternate-link underline-link">Breadstick</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">16 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="square" class="text-secondary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Category page returned an error</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="circle" class="text-primary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">14 products added</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Steirer Brot</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Soda Bread</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived a support ticket</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">14 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Cholermüs</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Bazlama</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived an email</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Bazlama</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Activity End -->

                <!-- Recent Reviews Start -->
                <div class="col-xxl-6 mb-5">
                  <h2 class="small-title">Recent Reviews</h2>
                  <div class="card sh-35">
                    <div class="card-body mb-n2 scroll-out h-100">
                      <div class="scroll h-100">
                        <div class="row g-0 sh-10 mb-3">
                          <div class="col-auto">
                            <a href="Products.Detail.html">
                              <img src="{{asset('/backend/assets/img/product/small/product-2.webp')}}" class="card-img rounded-md h-100 sw-8" alt="thumb" />
                            </a>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="mb-1">
                                  <a href="Customers.Detail.html" class="body-link">Kathleen Bertha</a>
                                </div>
                                <div class="text-small text-muted text-truncate mb-1">
                                  Chocolate bar marzipan marzipan carrot cake gingerbread pastry ice cream. Ice cream danish sugar plum biscuit pudding powder
                                  soufflé donut macaroon.
                                </div>
                                <div class="br-wrapper br-theme-cs-icon">
                                  <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 sh-10 mb-3">
                          <div class="col-auto">
                            <a href="Products.Detail.html">
                              <img src="{{asset('/backend/assets/img/product/small/product-3.webp')}}" class="card-img rounded-md h-100 sw-8" alt="thumb" />
                            </a>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="mb-1">
                                  <a href="Customers.Detail.html" class="body-link">Kathleen Bertha</a>
                                </div>
                                <div class="text-small text-muted text-truncate mb-1">Bear claw sweet liquorice jujubes. Muffin gingerbread bear claw.</div>
                                <div class="br-wrapper br-theme-cs-icon">
                                  <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 sh-10 mb-3">
                          <div class="col-auto">
                            <a href="Products.Detail.html">
                              <img src="{{asset('/backend/assets/img/product/small/product-1.webp')}}" class="card-img rounded-md h-100 sw-8" alt="thumb" />
                            </a>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="mb-1">
                                  <a href="Customers.Detail.html" class="body-link">Olli Hawkins</a>
                                </div>
                                <div class="text-small text-muted text-truncate mb-1">Bear claw sweet liquorice jujubes. Muffin gingerbread bear claw.</div>
                                <div class="br-wrapper br-theme-cs-icon">
                                  <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 sh-10">
                          <div class="col-auto">
                            <a href="Products.Detail.html">
                              <img src="{{asset('/backend/assets/img/product/small/product-10.webp')}}" class="card-img rounded-md h-100 sw-8" alt="thumb" />
                            </a>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="mb-1">
                                  <a href="Customers.Detail.html" class="body-link">Zayn Hammond</a>
                                </div>
                                <div class="text-small text-muted text-truncate mb-1">Chupa chups candy canes.</div>
                                <div class="br-wrapper br-theme-cs-icon">
                                  <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Recent Reviews End -->
              </div>
            </div>

            <!-- Tips Start -->
            <div class="col-12 col-xxl-auto mb-5">
              <h2 class="small-title">Tips</h2>
              <div class="card h-100-card sw-xxl-40">
                <div class="card-body row g-0">
                  <div class="col-12 d-flex flex-column justify-content-between align-items-start">
                    <div>
                      <div class="cta-3">More sales?</div>
                      <div class="mb-3 cta-3 text-primary">Add new products!</div>
                      <div class="text-muted mb-4">
                        Cheesecake chocolate carrot cake pie lollipop apple pie lemon cream lollipop.
                        <br />
                        Oat cake lemon drops gummi pie cake cotton.
                      </div>
                    </div>
                    <a href="Products.List.html" class="btn btn-icon btn-icon-start btn-outline-primary stretched-link">
                      <i data-acorn-icon="plus"></i>
                      <span>Add Products</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Tips End -->
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