<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frest/images/ico/favicon.ico') }}">
    <meta name="theme-color" content="#5A8DEE">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('/frest/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('/frest/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/frest/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/frest/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/frest/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/frest/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/frest/css/themes/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('/frest/css/core/menu/menu-types/horizontal-menu.css') }}">
    <!-- END: Page CSS-->


    <!-- BEGIN: Google Recaptcha v3  -->
    {!! htmlScriptTagJsApi() !!}
    <!-- END: Google Recaptcha v3    -->

    @yield('styles')
    @livewireStyles
</head>
