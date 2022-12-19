@section('title','Home')
@include('layouts.user.header')
@include('layouts.user.slider')
<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Product Overview
            </h3>
        </div>

        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-c-m m-tb-10">
                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                    <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Filter
                </div>

                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Search
                </div>
            </div>

            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <div class="bor8 dis-flex p-l-15">
                    <form method="POST">
                        @csrf
                        <input class="mtext-107 cl2 size-114 plh2 p-r-15 search-product-input" type="text"
                            name="search-product" placeholder="Search">
                    </form>
                </div>
            </div>
            <!-- Filter -->
            <div class="dis-none panel-filter w-full p-t-10">
                <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                    <div class="filter-col1 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Sort By
                        </div>

                        <ul>
                            <li class="p-b-6">
                                <a class="filter-link stext-106 trans-04" data-sortting_by="price-low-to-high">
                                    Price: Low to High
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a class="filter-link stext-106 trans-04" data-sortting_by="price-high-to-low">
                                    Price: High to Low
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col2 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Price
                        </div>

                        <ul>
                            <li class="p-b-6">
                                <a class="filter-link stext-106 trans-04" data-price="from-0-to-500">
                                    $0 - $500
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a class="filter-link stext-106 trans-04" data-price="from-500-to-1000">
                                    $500 - $1000
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a class="filter-link stext-106 trans-04" data-price="from-1000-to-1500">
                                    $1000 - $1500
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a class="filter-link stext-106 trans-04" data-price="from-1500-to-2000">
                                    $1500- $2000
                                </a>
                            </li>

                            <li class="p-b-6">
                                <a class="filter-link stext-106 trans-04" data-price="from-2000-to-10000">
                                    $2000+
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-col3 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Color
                        </div>

                        <ul>
                            @foreach ($colors as $color)
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: {{ $color->color_name }};">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a class="filter-link stext-106 trans-04" data-color="{{ $color->color_name }}">
                                        {{ $color->color_name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filter-col4 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Filter
                        </div>
                        <form action="POST">
                            @csrf
                            <button class="filter-accpet btn btn-danger">Filter</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row isotope-grid fetchData-whenLoadMore_product_user"></div>
        @include('user.product.modal-change')
    </div>
</section>
@include('layouts.user.footer')
