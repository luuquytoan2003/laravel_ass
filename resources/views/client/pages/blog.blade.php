@extends('client.layout')
@section('content')
    <main>

        <!-- breadcrumb area start -->
        @include('client.component.breadcrumb')
        <!-- breadcrumb area end -->

        <!-- postbox area start -->
        <section class="tp-postbox-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    @include('client.component.blog.blog')
                    

                    @include('client.component.blog.sidebar')
                </div>
            </div>
        </section>
        <!-- postbox area end -->

    </main>
@endsection
