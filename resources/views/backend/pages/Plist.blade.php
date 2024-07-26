@include('backend.layouts.pheader')
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
                                <span class="text-small align-middle">Home </span>
                            </a>
                            <h1 class="mb-0 pb-0 display-4" id="title">Product List</h1>
                        </div>
                    </div>
                    <!-- Title End -->

                    <!-- Top Buttons Start -->
                    <div class="w-100 d-md-none"></div>
                    <div
                        class="col-12 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                        <a href="{{url('admin/product/add')}}"
                            class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto">
                            <i data-acorn-icon="plus"></i>
                            <span>Add Product</span>
                        </button>
                        <div class="dropdown d-inline-block d-lg-none">
                            <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only ms-1"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                aria-expanded="false">
                                <i data-acorn-icon="sort"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end custom-sort">
                                <a class="dropdown-item sort" data-sort="name" href="#">Title</a>
                                <a class="dropdown-item sort" data-sort="email" href="#">Stock</a>
                                <a class="dropdown-item sort" data-sort="phone" href="#">Price</a>
                                <a class="dropdown-item sort" data-sort="group" href="#">Status</a>
                            </div>
                        </div>
                        <div class="btn-group ms-1 check-all-container-checkbox-click">
                            <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2"
                                data-target="#checkboxTable">
                                <span class="form-check float-end">
                                    <input type="checkbox" class="form-check-input" id="checkAll" />
                                </span>
                            </div>
                            <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-offset="0,3" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"></button>
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
                    <div
                        class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
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
                        <button class="btn btn-icon btn-icon-only btn-foreground-alternate shadow"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-delay="0" title="Print"
                            type="button">
                            <i data-acorn-icon="print"></i>
                        </button>
                        <!-- Print Button End -->

                        <!-- Export Dropdown Start -->
                        <div class="d-inline-block">
                            <button class="btn p-0" data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                <span class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown"
                                    data-bs-delay="0" data-bs-placement="top" data-bs-toggle="tooltip" title="Export">
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
                            <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" data-bs-offset="0,3">
                                <span class="btn btn-foreground-alternate dropdown-toggle" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-delay="0" title="Item Count">
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

            <div class="row g-0">
                <div class="col-12 mb-5">
                    <!-- List Items Start -->
                    <div id="checkboxTable">
                        <div class="mb-4 mb-lg-3 bg-transparent no-shadow d-none d-lg-block">
                            <div class="row g-0">
                                <div class="col-auto sw-11 d-none d-lg-flex"></div>
                                <div class="col">
                                    <div class="ps-5 pe-4 h-100">
                                        <div class="row g-0 h-100 align-content-center custom-sort">
                                            <div class="col-lg-4 d-flex flex-column mb-lg-0 pe-3 d-flex">
                                                <div class="text-muted text-small cursor-pointer sort"
                                                    data-sort="name">TITLE</div>
                                            </div>
                                            <div class="col-lg-2 d-flex flex-column pe-1 justify-content-center">
                                                <div class="text-muted text-small cursor-pointer sort"
                                                    data-sort="email">STOCK</div>
                                            </div>
                                            <div class="col-lg-3 d-flex flex-column pe-1 justify-content-center">
                                                <div class="text-muted text-small cursor-pointer sort"
                                                    data-sort="phone">PRICE</div>
                                            </div>
                                            <div class="col-lg-2 d-flex flex-column pe-1 justify-content-center">
                                                <div class="text-muted text-small cursor-pointer sort"
                                                    data-sort="group">STATUS</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Items Container Start -->
                        @foreach ($products as $product)
                            <div class="card mb-2">
                                <div class="row g-0 h-100 sh-lg-9 position-relative">
                                    <a href="{{ route('admin.product.view', ['id' => $product->id]) }}"
                                        class="col-auto position-relative">
                                        <img src="{{ asset('/backend/assets/img/product/small/product-1.webp') }}"
                                            alt="product" class="card-img card-img-horizontal sw-11 h-100" />
                                    </a>
                                    <div class="col py-4 py-lg-0">
                                        <div class="ps-5 pe-4 h-100">
                                            <div class="row g-0 h-100 align-content-center">
                                                <a href="{{ route('admin.product.view', ['id' => $product->id]) }}"
                                                    class="col-11 col-lg-4 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center">
                                                    {{ $product->title }}
                                                    <div class="text-small text-muted text-truncate position">
                                                        #{{ $product->id }} </div>

                                                </a>
                                                <div
                                                    class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                                    <div class="lh-1 text-alternate">{{ $product->stock }}</div>
                                                </div>
                                                <div
                                                    class="col-12 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                                    <div class="lh-1 text-alternate">$ {{ $product->price }}</div>
                                                </div>
                                                <div
                                                    class="col-12 col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5">
                                                    <span
                                                        class="badge bg-outline-primary group">{{ $product->status }}</span>
                                                </div>
                                                <div
                                                    class="col-1 d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                                    <label class="form-check mt-2">
                                                        <input type="checkbox" class="form-check-input pe-none" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- List Items End -->
                    </div>
                </div>
                <!-- Items Pagination Start -->
                <div class="w-100 d-flex justify-content-center">
                    {{ $products->links('vendor/pagination/bootstrap-5') }}
                    {{-- <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link shadow" href="" tabindex="-1" aria-disabled="true">
                                        <i data-acorn-icon="chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link shadow" href="#">1</a></li>
                                <li class="page-item"><a class="page-link shadow" href="#">2</a></li>
                                <li class="page-item"><a class="page-link shadow" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link shadow" href="#">
                                        <i data-acorn-icon="chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}
                </div>
                <!-- Items Pagination End -->
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
                                <a href="https://1.envato.market/BX5oGy" target="_blank"
                                    class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0 text-medium">
                                <a href="https://acorn-html-docs.coloredstrategies.com/" target="_blank"
                                    class="btn-link">Docs</a>
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
{{-- @include('backend.layouts.all_model') --}}
<!-- Theme Settings Modal end -->
@include('backend.layouts.pfooter')
.
