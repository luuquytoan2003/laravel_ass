<!doctype html>
<html class="no-js" lang="zxx">


<head>
   @include('client.component.head')
</head>

<body>

   <!-- pre loader area start -->
   @include('client.component.loading')
   <!-- pre loader area end -->

   <!-- back to top start -->
   @include('client.component.backtotop')
   <!-- back to top end -->

   <!-- offcanvas area start -->
   @include('client.component.offcanvas')
   <!-- offcanvas area end -->

   <!-- mobile menu area start -->
   @include('client.component.mobilemenu')
   <!-- mobile menu area end -->

   <!-- search area start -->
   @include('client.component.search')
   <!-- search area end -->

   <!-- cart mini area start -->
   @include('client.component.cartmini')
   <!-- cart mini area end -->

   <!-- header area start -->
   @include('client.component.header')
   <!-- header area end -->

   

   {{-- content-start --}}
   @yield('content')
   {{-- content-end --}}


   
   <!-- footer area start -->
   @include('client.component.footer')
   <!-- footer area end -->



   @include('client.component.script')
</body>


</html>