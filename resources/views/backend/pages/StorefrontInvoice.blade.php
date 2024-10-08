@include('backend.layouts.header')

  <body>
    <div id="root">
      @include('backend.layouts.left_side_bar')

      <main class="print-restricted">
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
                  <h1 class="mb-0 pb-0 display-4" id="title">Invoice</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="col-12 col-md-5 d-flex align-items-center justify-content-end">
                <a onclick="window.print(); return false;" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto" href="#">
                  <i data-acorn-icon="print"></i>
                  <span>Print</span>
                </a>
              </div>
              <!-- Top Buttons End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <!-- Standard Start -->
          <!-- card-print: removes shadow, margin and padding  -->
          <!-- print-me: removes everyting from main .container except the element with the class if main tag has print-restricted class -->
          <h2 class="small-title">Standard</h2>
          <div class="card mb-5 card-print print-me">
            <div class="card-body">
              <div class="row d-flex flex-row align-items-center">
                <div class="col-12 col-md-6">
                  <img src="img/logo/logo-blue-light.svg" class="sw-17" alt="logo" />
                </div>
                <div class="col-12 col-md-6 text-end">
                  <div class="mb-2">ColoredStrategies Inc</div>
                  <div class="text-small text-muted">4 Glamis Avenue, Strathmore Park, Wellington 6022, New Zealand</div>
                  <div class="text-small text-muted">+6443884455</div>
                </div>
              </div>
              <div class="separator separator-light mt-5 mb-5"></div>
              <div class="row g-1 mb-5">
                <div class="col-12 col-md-8">
                  <div class="py-3">
                    <div>Blaine Cottrell</div>
                    <div>55 Esk Street, Invercargill 9810, New Zealand</div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="py-3 text-md-end">
                    <div>Invoice #: 741</div>
                    <div>02.02.2019</div>
                  </div>
                </div>
              </div>

              <div>
                <div class="row mb-4 d-none d-sm-flex">
                  <div class="col-6">
                    <p class="mb-0 text-small text-muted">ITEM NAME</p>
                  </div>
                  <div class="col-3">
                    <p class="mb-0 text-small text-muted">COUNT</p>
                  </div>
                  <div class="col-3 text-end">
                    <p class="mb-0 text-small text-muted">PRICE</p>
                  </div>
                </div>

                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">Wooden Animal Toys</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">3 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 14.82</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">Aromatic Green Candle</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">2 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 8.97</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">Good Glass Teapot</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">2 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 18.24</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">Modern Dark Pot</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">2 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 4.24</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">Wood Handle Hunter Knife</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">3 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 6.27</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">Wireless On-Ear Headphones</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">2 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 10.97</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">White Coffee Mug</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">2 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 21.24</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">Geometric Chandelier</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">3 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 42.15</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">XBox Controller</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">1 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 11.15</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">Health and Fitness Smartwatch</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">2 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 35.25</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">Yeast Karavai</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">5 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 63.75</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">Bammy</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">2 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 13.25</p>
                  </div>
                </div>
                <div class="row mb-4 mb-sm-2">
                  <div class="col-12 col-sm-6">
                    <h6 class="mb-0">Buccellato di Lucca</h6>
                  </div>
                  <div class="col-12 col-sm-3">
                    <p class="mb-0 text-alternate">2 pcs</p>
                  </div>
                  <div class="col-12 col-sm-3 text-sm-end">
                    <p class="mb-0 text-alternate">$ 19.50</p>
                  </div>
                </div>
              </div>

              <div class="separator separator-light mt-5 mb-5"></div>

              <div class="row">
                <div class="col text-sm-end text-muted">
                  <div>Subtotal :</div>
                  <div>Tax :</div>
                  <div>Shipping :</div>
                  <div>Total :</div>
                </div>
                <div class="col-auto text-end">
                  <div>$ 61.82</div>
                  <div>$ 2.18</div>
                  <div>$ 3.21</div>
                  <div>$ 68.14</div>
                </div>
              </div>

              <div class="separator separator-light"></div>

              <div class="text-small text-muted text-center">Invoice was created on a computer and is valid without the signature and seal.</div>
            </div>
          </div>
          <!-- Standard End -->

          <!-- Inline Start -->
          <h2 class="small-title">Inline Styled</h2>
          <div class="card">
            <div class="card-body">
              <div style="width: 100%; font-family: Helvetica, Arial, sans-serif !important; position: relative">
                <table style="width: 100%; border-collapse: separate !important; border-spacing: 0; color: #242128; margin: 0">
                  <tbody>
                    <tr>
                      <td style="padding-bottom: 35px; border-top: 0; width: 100% !important; text-align: left; vertical-align: center">
                        <img src="img/logo/logo-blue-light.svg" style="width: 140px" alt="logo" />
                      </td>
                      <td style="padding-bottom: 35px; padding-top: 5px; border-top: 0; width: 100% !important; text-align: right; vertical-align: center">
                        <p style="color: #4e4e4e; font-weight: normal; line-height: 1.2; font-size: 14px; white-space: nowrap">ColoredStrategies Inc</p>
                        <p style="color: #afafaf; font-weight: normal; line-height: 1.2; font-size: 11px; white-space: nowrap; margin-bottom: 0">
                          4 Glamis Avenue, Strathmore Park, Wellington 6022, New Zealand
                        </p>
                        <p style="color: #afafaf; font-weight: normal; line-height: 1.2; font-size: 11px; white-space: nowrap; margin-bottom: 0">+6443884455</p>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="padding-top: 30px; border-top: 1px solid #f1f1f1">
                        <table style="width: 100%">
                          <tbody>
                            <tr>
                              <td style="vertical-align: middle; padding-top: 20px; padding-bottom: 20px">
                                <p style="color: #4e4e4e; font-size: 14px; line-height: 1.6; margin: 0; padding: 0">
                                  Blaine Cottrell
                                  <br />
                                  55 Esk Street, Invercargill 9810, New Zealand
                                </p>
                              </td>

                              <td
                                style="text-align: right; padding-top: 0px; padding-bottom: 0; vertical-align: middle; padding-bottom: 20px; padding-top: 20px"
                              >
                                <p style="color: #4e4e4e; font-size: 14px; padding: 0; line-height: 1.6; margin: 0">
                                  Invoice #: 741
                                  <br />
                                  02.02.2019
                                </p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table style="width: 100%; margin-top: 40px">
                          <thead>
                            <tr>
                              <th style="text-align: left; font-weight: 400; font-size: 11px; color: #afafaf; padding-bottom: 15px">ITEM NAME</th>
                              <th style="text-align: left; font-weight: 400; font-size: 11px; color: #afafaf; padding-bottom: 15px">COUNT</th>
                              <th style="text-align: right; font-weight: 400; font-size: 11px; color: #afafaf; padding-bottom: 15px">PRICE</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                  Wooden Animal Toys
                                </h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">3 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 14.82
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                  Aromatic Green Candle
                                </h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">2 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 8.97
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                  Good Glass Teapot
                                </h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">2 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 18.24
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                  Modern Dark Pot
                                </h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">2 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 4.24
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                  Wood Handle Hunter Knife
                                </h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">3 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 6.27
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                  Wireless On-Ear Headphones
                                </h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">2 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 10.97
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                  White Coffee Mug
                                </h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">2 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 21.24
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                  Geometric Chandelier
                                </h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">4 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 14.50
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                  XBox Controller
                                </h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">4 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 11.90
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                  Health and Fitness Smartwatch
                                </h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">1 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 1.45
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">Barmbrack</h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">2 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 15.00
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">Bagel</h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">3 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 42.15
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td style="padding-top: 0px; padding-bottom: 5px">
                                <h6 style="font-size: 14px; line-height: 1; margin-bottom: 0; color: #4e4e4e; font-weight: 500; margin-top: 10px">
                                  Buccellato di Lucca
                                </h6>
                              </td>
                              <td>
                                <p style="font-size: 14px; text-decoration: none; line-height: 1; color: #7c7c7c; margin-top: 0px; margin-bottom: 0">5 pcs</p>
                              </td>
                              <td style="padding-top: 0px; padding-bottom: 0; text-align: right">
                                <p
                                  style="
                                    font-size: 14px;
                                    line-height: 1;
                                    color: #4e4e4e;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    vertical-align: top;
                                    white-space: nowrap;
                                  "
                                >
                                  $ 84.75
                                </p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table style="width: 100%; border-collapse: separate !important; border-spacing: 0; color: #242128; margin: 0; padding-top: 20px">
                  <tr>
                    <td colspan="2" style="border-top: 1px solid #f1f1f1">&nbsp;</td>
                  </tr>
                  <tr>
                    <td style="width: 100%">
                      <p style="font-size: 13px; text-decoration: none; line-height: 1.6; color: #afafaf; margin-top: 0px; margin-bottom: 0; text-align: right">
                        Subtotal :
                      </p>
                    </td>
                    <td style="padding-top: 0px; text-align: right">
                      <p
                        style="
                          font-size: 13px;
                          line-height: 1.6;
                          color: #4e4e4e;
                          margin-bottom: 0;
                          margin-top: 0;
                          vertical-align: top;
                          white-space: nowrap;
                          margin-left: 15px;
                        "
                      >
                        $ 61.82
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 100%">
                      <p style="font-size: 13px; text-decoration: none; line-height: 1.6; color: #afafaf; margin-top: 0px; margin-bottom: 0; text-align: right">
                        Tax :
                      </p>
                    </td>
                    <td style="padding-top: 0px; text-align: right">
                      <p
                        style="
                          font-size: 13px;
                          line-height: 1.6;
                          color: #4e4e4e;
                          margin-bottom: 0;
                          margin-top: 0;
                          vertical-align: top;
                          white-space: nowrap;
                          margin-left: 15px;
                        "
                      >
                        $ 2.18
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 100%">
                      <p style="font-size: 13px; text-decoration: none; line-height: 1.6; color: #afafaf; margin-top: 0px; margin-bottom: 0; text-align: right">
                        Shipping :
                      </p>
                    </td>
                    <td style="padding-top: 0px; text-align: right">
                      <p
                        style="
                          font-size: 13px;
                          line-height: 1.6;
                          color: #4e4e4e;
                          margin-bottom: 0;
                          margin-top: 0;
                          vertical-align: top;
                          white-space: nowrap;
                          margin-left: 15px;
                        "
                      >
                        $ 3.21
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 100%; padding-bottom: 15px">
                      <p style="font-size: 13px; text-decoration: none; line-height: 1.6; color: #afafaf; margin-top: 0px; margin-bottom: 0; text-align: right">
                        Total :
                      </p>
                    </td>
                    <td style="padding-top: 0px; text-align: right; padding-bottom: 15px">
                      <p
                        style="
                          font-size: 13px;
                          line-height: 1.6;
                          color: #4e4e4e;
                          margin-bottom: 0;
                          margin-top: 0;
                          vertical-align: top;
                          white-space: nowrap;
                          margin-left: 15px;
                        "
                      >
                        $ 68.14
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" style="border-top: 1px solid #f1f1f1">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2" style="text-align: center">
                      <p style="color: #afafaf; font-size: 11px; text-align: center">
                        Invoice was created on a computer and is valid without the signature and seal.
                      </p>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <!-- Inline End -->
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
