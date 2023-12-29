@extends('client.layout')
@section('content')
    <main>
        <!-- slider area start -->
        @include('client.component.home.slider')
        <!-- slider area end -->

        <!-- banner area start -->
        @include('client.component.home.banner')
        <!-- banner area end -->

        <!-- category area start -->
        @include('client.component.home.category')
        <!-- category area end -->

        <!-- product area start -->
        @include('client.component.home.product')
        <!-- product area end -->

        <!-- product slider area start -->
        @include('client.component.home.productSlider')
        <!-- product slider area end -->

        <!-- trending area start -->
        @include('client.component.home.trending')
        <!-- trending area end -->

        <!-- best seller area start -->
        @include('client.component.home.bestSeller')
        <!-- best seller area end -->

        <!-- testimonial area start -->
        @include('client.component.home.testimonial')
        <!-- testimonial area end -->

        <!-- blog area start -->
        @include('client.component.home.blog')
        <!-- blog area end -->

        <!-- feature area start -->
        @include('client.component.home.feature')
        <!-- feature area end -->

        <!-- instagram area start -->
        @include('client.component.home.instagram')
        <!-- instagram area end -->

        @include('client.component.home.other')
    </main>
@endsection
