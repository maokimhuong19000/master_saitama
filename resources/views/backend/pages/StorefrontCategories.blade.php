@include('backend.layouts.header')
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
                    <span class="text-small align-middle">Storefront</span>
                  </a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Categories</h1>
                </div>
              </div>
              <!-- Title End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <!-- Trending Start -->
          <div class="d-flex justify-content-between">
            <h2 class="small-title">Trending</h2>
            <div class="mt-n1">
              <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                <span>View All</span>
                <i data-acorn-icon="chevron-right"></i>
              </button>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 mb-5">
            <div class="col">
              <div class="card h-100 position-relative">
                <span class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                <img src="img/product/small/product-1.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-2">
                  <div class="h6 mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">Wooden Animal Toys</span>
                    </a>
                  </div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(5)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2">
                      <del>$ 12.25</del>
                    </div>
                    <div>$ 9.75</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/product/small/product-2.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-2">
                  <div class="h6 mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">Aromatic Green Candle</span>
                    </a>
                  </div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(44)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2"></div>
                    <div>$ 6.75</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 position-relative">
                <span class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                <img src="img/product/small/product-3.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-2">
                  <div class="h6 mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">Good Glass Teapot</span>
                    </a>
                  </div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(2)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2">
                      <del>$ 10.25</del>
                    </div>
                    <div>$ 8.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/product/small/product-4.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-3">
                  <h5 class="heading mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">Modern Dark Pot</span>
                    </a>
                  </h5>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(412)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2"></div>
                    <div>$ 1.75</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Trending End -->

          <!-- Bestsellers Start -->
          <div class="d-flex justify-content-between">
            <h2 class="small-title">Bestsellers</h2>
            <div class="mt-n1">
              <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                <span>View All</span>
                <i data-acorn-icon="chevron-right"></i>
              </button>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 mb-5">
            <div class="col">
              <div class="card h-100">
                <img src="img/product/small/product-5.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-2">
                  <div class="h6 mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">Wood Handle Hunter Knife</span>
                    </a>
                  </div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(44)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2"></div>
                    <div>$ 5.75</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/product/small/product-6.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-2">
                  <div class="h6 mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">Wireless On-Ear Headphones</span>
                    </a>
                  </div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(2)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2"></div>
                    <div>$ 2.25</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/product/small/product-7.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-3">
                  <h5 class="heading mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">White Coffee Mug</span>
                    </a>
                  </h5>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(412)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2"></div>
                    <div>$ 4.50</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 position-relative">
                <span class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                <img src="img/product/small/product-8.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-2">
                  <div class="h6 mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">Geometric Chandelier</span>
                    </a>
                  </div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(5)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2">
                      <del>$ 6.75</del>
                    </div>
                    <div>$ 3.50</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Bestsellers End -->

          <!-- Newest Products Start -->
          <div class="d-flex justify-content-between">
            <h2 class="small-title">Newest Products</h2>
            <div class="mt-n1">
              <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                <span>View All</span>
                <i data-acorn-icon="chevron-right"></i>
              </button>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 mb-5">
            <div class="col">
              <div class="card h-100 position-relative">
                <span class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                <img src="img/product/small/product-9.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-2">
                  <div class="h6 mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">XBox Controller</span>
                    </a>
                  </div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(2)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2">
                      <del>$ 12.25</del>
                    </div>
                    <div>$ 9.50</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/product/small/product-10.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-3">
                  <h5 class="heading mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">Health and Fitness Smartwatch</span>
                    </a>
                  </h5>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(412)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2"></div>
                    <div>$ 7.25</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 position-relative">
                <span class="badge rounded-pill bg-primary me-1 position-absolute s-n2 t-2 z-index-1">SALE</span>
                <img src="img/product/small/product-1.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-2">
                  <div class="h6 mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">Wooden Animal Toys</span>
                    </a>
                  </div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(5)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2">
                      <del>$ 12.50</del>
                    </div>
                    <div>$ 9.25</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="img/product/small/product-2.webp" class="card-img-top sh-22" alt="card image" />
                <div class="card-body pb-2">
                  <div class="h6 mb-0 d-flex">
                    <a href="Storefront.Detail.html" class="body-link d-block stretched-link sh-4">
                      <span class="clamp-line" data-line="2">Aromatic Green Candle</span>
                    </a>
                  </div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="mb-2">
                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                      <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="text-muted d-inline-block text-small align-text-top">(44)</div>
                  </div>
                  <div class="card-text mb-0">
                    <div class="text-muted text-overline text-small sh-2"></div>
                    <div>$ 2.25</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Newest Products End -->

          <!-- Discover Start -->
          <h2 class="small-title">Discover</h2>
          <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-3 mb-5">
            <div class="col">
              <div class="card">
                <div class="row g-0 sh-16 sh-sm-17">
                  <div class="col-auto h-100 position-relative">
                    <span class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-2 z-index-1">SALE</span>
                    <img src="img/product/small/product-1.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22" />
                  </div>
                  <div class="col p-0">
                    <div class="card-body d-flex align-items-center h-100 py-3">
                      <div class="mb-0 h6">
                        <a href="Storefront.Detail.html" class="body-link stretched-link">
                          <div class="clamp-line sh-3 lh-1-5" data-line="1">Wooden Animal Toys</div>
                        </a>
                        <div class="card-text mb-2">
                          <div class="text-muted text-overline text-small sh-2">
                            <del>$ 12.25</del>
                          </div>
                          <div>$ 8.50</div>
                        </div>
                        <div>
                          <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="text-muted d-inline-block text-small align-text-top">(5)</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="row g-0 sh-16 sh-sm-17">
                  <div class="col-auto h-100">
                    <img src="img/product/small/product-2.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22" />
                  </div>
                  <div class="col p-0">
                    <div class="card-body d-flex align-items-center h-100 py-3">
                      <div class="mb-0 h6">
                        <a href="Storefront.Detail.html" class="body-link stretched-link">
                          <div class="clamp-line sh-3 lh-1-5" data-line="1">Aromatic Green Candle</div>
                        </a>
                        <div class="card-text mb-2">
                          <div class="text-muted text-overline text-small sh-2"></div>
                          <div>$ 7.50</div>
                        </div>
                        <div>
                          <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="text-muted d-inline-block text-small align-text-top">(2)</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="row g-0 sh-16 sh-sm-17">
                  <div class="col-auto h-100">
                    <img src="img/product/small/product-3.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22" />
                  </div>
                  <div class="col p-0">
                    <div class="card-body d-flex align-items-center h-100 py-3">
                      <div class="mb-0 h6">
                        <a href="Storefront.Detail.html" class="body-link stretched-link">
                          <div class="clamp-line sh-3 lh-1-5" data-line="1">Good Glass Teapot</div>
                        </a>
                        <div class="card-text mb-2">
                          <div class="text-muted text-overline text-small sh-2"></div>
                          <div>$ 4.25</div>
                        </div>
                        <div>
                          <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="text-muted d-inline-block text-small align-text-top">(4)</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="row g-0 sh-16 sh-sm-17">
                  <div class="col-auto h-100">
                    <img src="img/product/small/product-4.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22" />
                  </div>
                  <div class="col p-0">
                    <div class="card-body d-flex align-items-center h-100 py-3">
                      <div class="mb-0 h6">
                        <a href="Storefront.Detail.html" class="body-link stretched-link">
                          <div class="clamp-line sh-3 lh-1-5" data-line="1">Modern Dark Pot</div>
                        </a>
                        <div class="card-text mb-2">
                          <div class="text-muted text-overline text-small sh-2"></div>
                          <div>$ 12.25</div>
                        </div>
                        <div>
                          <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="text-muted d-inline-block text-small align-text-top">(12)</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="row g-0 sh-16 sh-sm-17">
                  <div class="col-auto h-100 position-relative">
                    <span class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-2 z-index-1">SALE</span>
                    <img src="img/product/small/product-5.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22" />
                  </div>
                  <div class="col p-0">
                    <div class="card-body d-flex align-items-center h-100 py-3">
                      <div class="mb-0 h6">
                        <a href="Storefront.Detail.html" class="body-link stretched-link">
                          <div class="clamp-line sh-3 lh-1-5" data-line="1">Wood Handle Hunter Knife</div>
                        </a>
                        <div class="card-text mb-2">
                          <div class="text-muted text-overline text-small sh-2">
                            <del>$ 3.25</del>
                          </div>
                          <div>$ 2.50</div>
                        </div>
                        <div>
                          <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="text-muted d-inline-block text-small align-text-top">(9)</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="row g-0 sh-16 sh-sm-17">
                  <div class="col-auto h-100 position-relative">
                    <span class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-2 z-index-1">SALE</span>
                    <img src="img/product/small/product-6.webp" alt="alternate text" class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-22" />
                  </div>
                  <div class="col p-0">
                    <div class="card-body d-flex align-items-center h-100 py-3">
                      <div class="mb-0 h6">
                        <a href="Storefront.Detail.html" class="body-link stretched-link">
                          <div class="clamp-line sh-3 lh-1-5" data-line="1">Wireless On-Ear Headphones</div>
                        </a>
                        <div class="card-text mb-2">
                          <div class="text-muted text-overline text-small sh-2">
                            <del>$ 5.25</del>
                          </div>
                          <div>$ 2.85</div>
                        </div>
                        <div>
                          <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="text-muted d-inline-block text-small align-text-top">(3)</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Discover End -->

          <!-- Banners Start -->
          <h2 class="small-title">Worth Checking</h2>
          <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                <img src="img/banner/cta-square-1.webp" class="card-img h-100 scale" alt="card image" />
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                  <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                    <div class="cta-3 text-black w-75 w-sm-50 w-lg-75 w-xxl-50">Seasoned Breads</div>
                    <a href="Storefront.Filters.html" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                      <i data-acorn-icon="chevron-right"></i>
                      <span>View</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                <img src="img/banner/cta-square-2.webp" class="card-img h-100 scale" alt="card image" />
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                  <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                    <div class="cta-3 text-black w-75 w-sm-50 w-lg-75 w-xxl-50">Herbal and Vegan</div>
                    <a href="Storefront.Filters.html" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                      <i data-acorn-icon="chevron-right"></i>
                      <span>View</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                <img src="img/banner/cta-square-3.webp" class="card-img h-100 scale" alt="card image" />
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                  <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                    <div class="cta-3 text-black w-75 w-sm-50 w-lg-75 w-xxl-50">Fruit Mixed Dough</div>
                    <a href="Storefront.Filters.html" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                      <i data-acorn-icon="chevron-right"></i>
                      <span>View</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="card w-100 sh-19 sh-sm-25 hover-img-scale-up">
                <img src="img/banner/cta-square-4.webp" class="card-img h-100 scale" alt="card image" />
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                  <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                    <div class="cta-3 text-black w-75 w-sm-50 w-lg-75 w-xxl-50">Berries, Nuts and Sugar</div>
                    <a href="Storefront.Filters.html" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                      <i data-acorn-icon="chevron-right"></i>
                      <span>View</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Banners End -->
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