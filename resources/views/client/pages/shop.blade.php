@extends('client.layout')
@section('content')
    <main>

        <!-- breadcrumb area start -->
        @include('client.component.breadcrumb')
        <!-- breadcrumb area end -->

        <!-- shop area start -->
        <section class="tp-shop-area pb-120">
            <div class="container">
                <div class="row">
                    {{-- filter  --}}
                    <div class="col-xl-3 col-lg-4">
                        <div class="tp-shop-sidebar mr-10">
                            <!-- filter -->
                            @include('client.component.shop.filter')
                            <!-- status -->
                            @include('client.component.shop.status')
                            <!-- categories -->
                            @include('client.component.shop.categories')
                            <!-- color -->
                            @include('client.component.shop.color')
                        </div>
                    </div>
                    {{-- product  --}}
                    <div class="col-xl-9 col-lg-8">
                        <div class="tp-shop-main-wrapper">
                            
                            @include('client.component.shop.product')

                            @include('client.component.shop.pagination')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop area end -->

        {{-- xem nhanh  --}}
        @include('client.component.shop.quickviewmodal')
    </main>
@endsection
