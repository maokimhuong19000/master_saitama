@include('backend.layouts.oheader')
  <body>
    <div id="root">
      @include('backend.layouts.left_side_bar')

      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div class="w-auto sw-md-30">
                  <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                    <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                    <span class="text-small align-middle">Home</span>
                  </a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Discount</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="w-100 d-md-none"></div>
              <div class="col-12 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                <button
                  type="button"
                  class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto"
                  data-bs-toggle="modal"
                  data-bs-target="#discountAddModal"
                >
                  <i data-acorn-icon="plus"></i>
                  <span>Add Discount</span>
                </button>
                <div class="dropdown d-inline-block d-xl-none">
                  <button
                    type="button"
                    class="btn btn-outline-primary btn-icon btn-icon-only ms-1"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i data-acorn-icon="sort"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end custom-sort">
                    <a class="dropdown-item sort" data-sort="code" href="#">Code</a>
                    <a class="dropdown-item sort" data-sort="type" href="#">Type</a>
                    <a class="dropdown-item sort" data-sort="date" href="#">Date</a>
                    <a class="dropdown-item sort" data-sort="usage" href="#">Usage</a>
                    <a class="dropdown-item sort" data-sort="status" href="#">Status</a>
                  </div>
                </div>
                <div class="btn-group ms-1 check-all-container">
                  <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2" data-target="#checkboxTable">
                    <span class="form-check float-end">
                      <input type="checkbox" class="form-check-input" id="checkAll" />
                    </span>
                  </div>
                  <button
                    type="button"
                    class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                    data-bs-offset="0,3"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  ></button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <button class="dropdown-item" id="deleteChecked" type="button">Delete</button>
                  </div>
                </div>
              </div>
              <!-- Top Buttons End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <!-- Controls Start -->
          <div class="row mb-2">
            <!-- Search Start -->
            <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
              <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                <input class="form-control" placeholder="Search" />
                <span class="search-magnifier-icon">
                  <i data-acorn-icon="search"></i>
                </span>
                <span class="search-delete-icon d-none">
                  <i data-acorn-icon="close"></i>
                </span>
              </div>
            </div>
            <!-- Search End -->

            <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
              <div class="d-inline-block">
                <!-- Print Button Start -->
                <button
                  class="btn btn-icon btn-icon-only btn-foreground-alternate shadow"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  data-bs-delay="0"
                  title="Print"
                  type="button"
                >
                  <i data-acorn-icon="print"></i>
                </button>
                <!-- Print Button End -->

                <!-- Export Dropdown Start -->
                <div class="d-inline-block">
                  <button class="btn p-0" data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                    <span
                      class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown"
                      data-bs-delay="0"
                      data-bs-placement="top"
                      data-bs-toggle="tooltip"
                      title="Export"
                    >
                      <i data-acorn-icon="download"></i>
                    </span>
                  </button>
                  <div class="dropdown-menu shadow dropdown-menu-end">
                    <button class="dropdown-item export-copy" type="button">Copy</button>
                    <button class="dropdown-item export-excel" type="button">Excel</button>
                    <button class="dropdown-item export-cvs" type="button">Cvs</button>
                  </div>
                </div>
                <!-- Export Dropdown End -->

                <!-- Length Start -->
                <div class="dropdown-as-select d-inline-block" data-childSelector="span">
                  <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,3">
                    <span
                      class="btn btn-foreground-alternate dropdown-toggle"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      data-bs-delay="0"
                      title="Item Count"
                    >
                      10 Items
                    </span>
                  </button>
                  <div class="dropdown-menu shadow dropdown-menu-end">
                    <a class="dropdown-item" href="#">5 Items</a>
                    <a class="dropdown-item active" href="#">10 Items</a>
                    <a class="dropdown-item" href="#">20 Items</a>
                  </div>
                </div>
                <!-- Length End -->
              </div>
            </div>
          </div>
          <!-- Controls End -->

          <!-- Discount List Start -->
          <div class="row">
            <div class="col-12 mb-5">
              <div class="card mb-2 bg-transparent no-shadow d-none d-lg-block">
                <div class="card-body pt-0 pb-0 sh-3">
                  <div class="row g-0 h-100 align-content-center">
                    <div class="col-12 col-lg-2 d-flex align-items-center mb-2 mb-lg-0 text-muted text-small">CODE</div>
                    <div class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">TYPE</div>
                    <div class="col-6 col-lg-4 d-flex align-items-center text-alternate text-medium text-muted text-small">DATE</div>
                    <div class="col-6 col-lg-2 d-flex align-items-center text-alternate text-medium text-muted text-small">USAGE</div>
                    <div class="col-6 col-lg-1 d-flex align-items-center text-alternate text-medium text-muted text-small">STATUS</div>
                  </div>
                </div>
              </div>
              <div id="checkboxTable">
                <div class="card mb-2">
                  <div class="card-body py-4 py-lg-0 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Code</div>
                        <a href="#" class="text-truncate h-100 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#discountDetailModal">
                          SUMMERSALE
                        </a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Type</div>
                        <div class="text-alternate">Fixed Amount</div>
                      </div>
                      <div class="col-6 col-lg-4 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Date</div>
                        <div class="text-alternate">01.06.2021 - 01.07.2021</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Usage</div>
                        <div class="text-alternate">532/1000</div>
                      </div>
                      <div class="col-6 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none">Status</div>
                        <div>
                          <span class="badge rounded-pill bg-outline-primary">ACTIVE</span>
                        </div>
                      </div>
                      <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                        <label class="form-check float-end pe-none mt-1">
                          <input type="checkbox" class="form-check-input" />
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="card-body py-4 py-lg-0 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Code</div>
                        <a
                          href="#"
                          class="text-truncate h-100 d-flex align-items-center muted-link"
                          data-bs-toggle="modal"
                          data-bs-target="#discountDetailModal"
                        >
                          15OFF
                        </a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Type</div>
                        <div class="text-muted">Percentage</div>
                      </div>
                      <div class="col-6 col-lg-4 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Date</div>
                        <div class="text-muted">14.04.2021 - 21.04.2021</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Usage</div>
                        <div class="text-muted">4562</div>
                      </div>
                      <div class="col-6 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none">Status</div>
                        <div>
                          <span class="badge rounded-pill bg-outline-muted">EXPIRED</span>
                        </div>
                      </div>
                      <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                        <label class="form-check float-end pe-none mt-1">
                          <input type="checkbox" class="form-check-input" />
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="card-body py-4 py-lg-0 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Code</div>
                        <a
                          href="#"
                          class="text-truncate h-100 d-flex align-items-center muted-link"
                          data-bs-toggle="modal"
                          data-bs-target="#discountDetailModal"
                        >
                          25OFF
                        </a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Type</div>
                        <div class="text-muted">Percentage</div>
                      </div>
                      <div class="col-6 col-lg-4 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Date</div>
                        <div class="text-muted">01.02.2021 - 01.03.2021</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Usage</div>
                        <div class="text-muted">792</div>
                      </div>
                      <div class="col-6 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none">Status</div>
                        <div>
                          <span class="badge rounded-pill bg-outline-muted">EXPIRED</span>
                        </div>
                      </div>
                      <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                        <label class="form-check float-end pe-none mt-1">
                          <input type="checkbox" class="form-check-input" />
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="card-body py-4 py-lg-0 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Code</div>
                        <a
                          href="#"
                          class="text-truncate h-100 d-flex align-items-center muted-link"
                          data-bs-toggle="modal"
                          data-bs-target="#discountDetailModal"
                        >
                          NEWYEAR
                        </a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Type</div>
                        <div class="text-muted">Percentage</div>
                      </div>
                      <div class="col-6 col-lg-4 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Date</div>
                        <div class="text-muted">21.12.2020 - 07.01.2021</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Usage</div>
                        <div class="text-muted">3814/5000</div>
                      </div>
                      <div class="col-6 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none">Status</div>
                        <div>
                          <span class="badge rounded-pill bg-outline-muted">EXPIRED</span>
                        </div>
                      </div>
                      <div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
                        <label class="form-check float-end pe-none mt-1">
                          <input type="checkbox" class="form-check-input" />
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Discount List End -->

          <!-- Discount Detail Modal Start -->
          <div class="modal modal-right fade" id="discountDetailModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Discount Detail</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Code</label>
                      <input type="text" class="form-control" value="SUMMERSALE" />
                    </div>
                    <div class="mb-3 w-100">
                      <label class="form-label">Type</label>
                      <select class="select-single-no-search">
                        <option label="&nbsp;"></option>
                        <option value="Fixed Amount">Fixed Amount</option>
                        <option value="Free Shipping">Free Shipping</option>
                        <option value="Percentage" selected>Percentage</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Start</label>
                      <input type="text" class="form-control date-picker-close" value="06/01/2020" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">End</label>
                      <input type="text" class="form-control date-picker-close" value="07/01/2020" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Limit</label>
                      <input type="text" class="form-control" value="5000" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Usage</label>
                      <input type="text" class="form-control" value="2723" readonly />
                    </div>
                    <div class="mb-3 w-100">
                      <label class="form-label">Status</label>
                      <select class="select-single-no-search">
                        <option label="&nbsp;"></option>
                        <option value="Active" selected>Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Expired">Expired</option>
                      </select>
                    </div>
                  </form>
                </div>
                <div class="modal-footer border-0">
                  <a
                    href="#"
                    class="btn btn-icon btn-icon-only btn-outline-primary"
                    data-delay='{"show":"500", "hide":"0"}'
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Delete"
                    data-bs-dismiss="modal"
                  >
                    <i data-acorn-icon="bin"></i>
                  </a>
                  <a href="#" class="btn btn-icon btn-icon-end btn-primary" data-bs-dismiss="modal">
                    <span>Save</span>
                    <i data-acorn-icon="save"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Discount Detail Modal End -->

          <!-- Discount Add Modal Start -->
          <div class="modal modal-right fade" id="discountAddModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add New Discount</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Code</label>
                      <input type="text" class="form-control" />
                    </div>
                    <div class="mb-3 w-100">
                      <label class="form-label">Type</label>
                      <select class="select-single-no-search">
                        <option label="&nbsp;"></option>
                        <option value="Fixed Amount">Fixed Amount</option>
                        <option value="Free Shipping">Free Shipping</option>
                        <option value="Percentage">Percentage</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Start</label>
                      <input type="text" class="form-control date-picker-close" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">End</label>
                      <input type="text" class="form-control date-picker-close" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Limit</label>
                      <input type="text" class="form-control mask-number" />
                    </div>
                    <div class="mb-3 w-100">
                      <label class="form-label">Status</label>
                      <select class="select-single-no-search">
                        <option label="&nbsp;"></option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Expired">Expired</option>
                      </select>
                    </div>
                  </form>
                </div>
                <div class="modal-footer border-0">
                  <a href="#" class="btn btn-icon btn-icon-end btn-primary" data-bs-dismiss="modal">
                    <span>Add</span>
                    <i data-acorn-icon="send"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Discount Add Modal End -->
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
    @include('backend.layouts.all_model')
    <!-- Theme Setting Modal End -->

    @include('backend.layouts.ofooter')