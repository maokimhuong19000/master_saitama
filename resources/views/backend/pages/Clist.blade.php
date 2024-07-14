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
                    <span class="text-small align-middle">Home</span>
                  </a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Customer List</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="col-3 d-flex align-items-end justify-content-end">
                <!-- Check Button Start -->
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
                    <a class="dropdown-item" href="#">
                      <span class="align-middle d-inline-block">Status</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="align-middle d-inline-block">Move</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="align-middle d-inline-block">Delete</span>
                    </a>
                  </div>
                </div>
                <!-- Check Button End -->
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

          <!-- Customers List Start -->
          <div class="row">
            <div class="col-12 mb-5">
              <div class="card mb-2 bg-transparent no-shadow d-none d-lg-block">
                <div class="row g-0 sh-3">
                  <div class="col">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-lg-1 d-flex align-items-center mb-2 mb-lg-0 text-muted text-small">ID</div>
                        <div class="col-lg-2 d-flex align-items-center text-muted text-small">NAME</div>
                        <div class="col-lg-2 d-flex align-items-center text-muted text-small">LOCATION</div>
                        <div class="col-lg-2 d-flex align-items-center text-muted text-small">SPENT</div>
                        <div class="col-lg-2 d-flex align-items-center text-muted text-small">LAST ORDER</div>
                        <div class="col-lg-2 d-flex align-items-center text-muted text-small">STATUS</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="checkboxTable">
                <div class="card mb-2">
                  <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Id</div>
                        <a href="Customers.Detail.html" class="text-truncate h-100 d-flex align-items-center">245</a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Name</div>
                        <div class="text-alternate">Joisse Kaycee</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Location</div>
                        <div class="text-alternate">Leipzig, DE</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Spent</div>
                        <div class="text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            321.75
                          </span>
                        </div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Last Order</div>
                        <div class="text-alternate">
                          <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">5323</a>
                        </div>
                      </div>
                      <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none mb-1">Status</div>
                        <div>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="content"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Newsletter"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="boxes"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Purchased"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="check-square"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Trusted"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="phone"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Phone"
                          ></i>
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
                  <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Id</div>
                        <a href="Customers.Detail.html" class="text-truncate h-100 d-flex align-items-center">244</a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Name</div>
                        <div class="text-alternate">Kathleen Bertha</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Location</div>
                        <div class="text-alternate">Salvador, BR</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Spent</div>
                        <div class="text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            321.75
                          </span>
                        </div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Last Order</div>
                        <div class="text-alternate">
                          <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">5323</a>
                        </div>
                      </div>
                      <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none mb-1">Status</div>
                        <div>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="content"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Newsletter"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="boxes"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Purchased"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="check-square"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Trusted"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="phone"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Phone"
                          ></i>
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
                  <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Id</div>
                        <a href="Customers.Detail.html" class="text-truncate h-100 d-flex align-items-center">243</a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Name</div>
                        <div class="text-alternate">Mickey Fianna</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Location</div>
                        <div class="text-alternate">San Antonio, US</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Spent</div>
                        <div class="text-alternate">-</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Last Order</div>
                        <div class="text-alternate">-</div>
                      </div>
                      <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none mb-1">Status</div>
                        <div>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="content"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Newsletter"
                          ></i>
                          <i
                            class="text-separator me-2"
                            data-acorn-icon="boxes"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Purchased"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="check-square"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Trusted"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="phone"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Phone"
                          ></i>
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
                  <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Id</div>
                        <a href="Customers.Detail.html" class="text-truncate h-100 d-flex align-items-center">242</a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Name</div>
                        <div class="text-alternate">Emilia Antoine</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Location</div>
                        <div class="text-alternate">Los Angeles, US</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Spent</div>
                        <div class="text-alternate">-</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Last Order</div>
                        <div class="text-alternate">-</div>
                      </div>
                      <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none mb-1">Status</div>
                        <div>
                          <i
                            class="text-separator me-2"
                            data-acorn-icon="content"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Newsletter"
                          ></i>
                          <i
                            class="text-separator me-2"
                            data-acorn-icon="boxes"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Purchased"
                          ></i>
                          <i
                            class="text-separator me-2"
                            data-acorn-icon="check-square"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Trusted"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="phone"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Phone"
                          ></i>
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
                  <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Id</div>
                        <a href="Customers.Detail.html" class="text-truncate h-100 d-flex align-items-center">241</a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Name</div>
                        <div class="text-alternate">Alicia Shannah</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Location</div>
                        <div class="text-alternate">Stuttgart, DE</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Spent</div>
                        <div class="text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            29.30
                          </span>
                        </div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Last Order</div>
                        <div class="text-alternate">
                          <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">5321</a>
                        </div>
                      </div>
                      <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none mb-1">Status</div>
                        <div>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="content"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Newsletter"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="boxes"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Purchased"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="check-square"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Trusted"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="phone"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Phone"
                          ></i>
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
                  <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Id</div>
                        <a href="Customers.Detail.html" class="text-truncate h-100 d-flex align-items-center">240</a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Name</div>
                        <div class="text-alternate">Sixte Tera</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Location</div>
                        <div class="text-alternate">Berlin, DE</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Spent</div>
                        <div class="text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            462.20
                          </span>
                        </div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Last Order</div>
                        <div class="text-alternate">
                          <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">5320</a>
                        </div>
                      </div>
                      <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none mb-1">Status</div>
                        <div>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="content"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Newsletter"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="boxes"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Purchased"
                          ></i>
                          <i
                            class="text-separator me-2"
                            data-acorn-icon="check-square"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Trusted"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="phone"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Phone"
                          ></i>
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
                  <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Id</div>
                        <a href="Customers.Detail.html" class="text-truncate h-100 d-flex align-items-center">239</a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Name</div>
                        <div class="text-alternate">Gresham Jeanette</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Location</div>
                        <div class="text-alternate">Naples, IT</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Spent</div>
                        <div class="text-alternate">-</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Last Order</div>
                        <div class="text-alternate">-</div>
                      </div>
                      <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none mb-1">Status</div>
                        <div>
                          <i
                            class="text-separator me-2"
                            data-acorn-icon="content"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Newsletter"
                          ></i>
                          <i
                            class="text-separator me-2"
                            data-acorn-icon="boxes"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Purchased"
                          ></i>
                          <i
                            class="text-separator me-2"
                            data-acorn-icon="check-square"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Trusted"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="phone"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Phone"
                          ></i>
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
                  <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Id</div>
                        <a href="Customers.Detail.html" class="text-truncate h-100 d-flex align-items-center">238</a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Name</div>
                        <div class="text-alternate">Elsie Pernilla</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Location</div>
                        <div class="text-alternate">Paris, FR</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Spent</div>
                        <div class="text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            85.20
                          </span>
                        </div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Last Order</div>
                        <div class="text-alternate">
                          <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">5318</a>
                        </div>
                      </div>
                      <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none mb-1">Status</div>
                        <div>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="content"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Newsletter"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="boxes"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Purchased"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="check-square"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Trusted"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="phone"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Phone"
                          ></i>
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
                  <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Id</div>
                        <a href="Customers.Detail.html" class="text-truncate h-100 d-flex align-items-center">237</a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Name</div>
                        <div class="text-alternate">Winry Rockbell</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Location</div>
                        <div class="text-alternate">Seul, KR</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Spent</div>
                        <div class="text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            104.65
                          </span>
                        </div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Last Order</div>
                        <div class="text-alternate">
                          <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">5317</a>
                        </div>
                      </div>
                      <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none mb-1">Status</div>
                        <div>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="content"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Newsletter"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="boxes"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Purchased"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="check-square"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Trusted"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="phone"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Phone"
                          ></i>
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
                  <div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
                    <div class="row g-0 h-100 align-content-center">
                      <div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
                        <div class="text-muted text-small d-lg-none">Id</div>
                        <a href="Customers.Detail.html" class="text-truncate h-100 d-flex align-items-center">236</a>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
                        <div class="text-muted text-small d-lg-none">Name</div>
                        <div class="text-alternate">Joisse Kaycee</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-3">
                        <div class="text-muted text-small d-lg-none">Location</div>
                        <div class="text-alternate">Rome, IT</div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Spent</div>
                        <div class="text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            72.50
                          </span>
                        </div>
                      </div>
                      <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                        <div class="text-muted text-small d-lg-none">Last Order</div>
                        <div class="text-alternate">
                          <a href="Orders.Detail.html" class="text-truncate h-100 d-flex align-items-center">5316</a>
                        </div>
                      </div>
                      <div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
                        <div class="text-muted text-small d-lg-none mb-1">Status</div>
                        <div>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="content"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Newsletter"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="boxes"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Purchased"
                          ></i>
                          <i
                            class="text-separator me-2"
                            data-acorn-icon="check-square"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Trusted"
                          ></i>
                          <i
                            class="text-primary me-2"
                            data-acorn-icon="phone"
                            data-acorn-size="17"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Phone"
                          ></i>
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
          <!-- Customers List End -->

          <!-- Pagination Start -->
          <div class="d-flex justify-content-center">
            <nav>
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link shadow" href="#" tabindex="-1" aria-disabled="true">
                    <i data-acorn-icon="chevron-left"></i>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link shadow" href="#">1</a></li>
                <li class="page-item"><a class="page-link shadow" href="#">2</a></li>
                <li class="page-item"><a class="page-link shadow" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i data-acorn-icon="chevron-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- Pagination End -->
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