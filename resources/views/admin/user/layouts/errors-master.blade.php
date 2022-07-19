<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl" dir="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frest/images/ico/favicon.ico') }} ">
    <meta name="theme-color" content="#5A8DEE">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/vendors/css/vendors.min.css') }} ">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/css/bootstrap-extended.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/css/colors.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/css/components.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/css/themes/dark-layout.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset(' frest/css/themes/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/css/core/menu/menu-types/horizontal-menu.css') }} ">
    <!-- END: Page CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu navbar-static dark-layout 1-column   footer-static bg-full-screen-image  blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column" data-layout="dark-layout">
<!-- BEGIN: Content-->
@yield('contents')
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('frest/vendors/js/vendors.min.js') }} "></script>
<script src="{{ asset('frest/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js') }} "></script>
<script src="{{ asset('frest/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }} "></script>
<script src="{{ asset('frest/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }} "></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('frest/vendors/js/ui/jquery.sticky.js') }} "></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('frest/js/scripts/configs/horizontal-menu.js') }} "></script>
<script src="{{ asset('frest/js/scripts/configs/vertical-menu-dark.js') }} "></script>
<script src="{{ asset('frest/js/core/app-menu.js') }} "></script>
<script src="{{ asset('frest/js/core/app.js') }} "></script>
<script src="{{ asset(' frest/js/scripts/components.js') }}"></script>
<script src="{{ asset('frest/js/scripts/footer.js') }} "></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>
