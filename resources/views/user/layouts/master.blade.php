<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl" dir="rtl">
<!-- BEGIN: Head-->
    @include('user.partials.head')
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu navbar-static dark-layout 2-columns   footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns" data-layout="dark-layout">

<!-- BEGIN: Header-->
@include('user.partials.header')
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('.user.partials.main-menu')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
@yield('contents')
<!-- END: Content-->


<!-- BEGIN: Footer-->
@include('user.partials.footer')
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('/frest/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('/frest/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js') }}"></script>
<script src="{{ asset('/frest/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
<script src="{{ asset('/frest/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('/frest/vendors/js/ui/jquery.sticky.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('/frest/js/scripts/configs/horizontal-menu.js') }}"></script>
<script src="{{ asset('/frest/js/scripts/configs/vertical-menu-dark.js') }}"></script>
<script src="{{ asset('/frest/js/core/app-menu.js') }}"></script>
<script src="{{ asset('/frest/js/core/app.js') }}"></script>
<script src="{{ asset('/frest/js/scripts/components.js') }}"></script>
<script src="{{ asset('/frest/js/scripts/footer.js') }}"></script>
<!-- END: Theme JS-->



@yield('modals')

@yield('scripts')


</body>
<!-- END: Body-->
</html>
