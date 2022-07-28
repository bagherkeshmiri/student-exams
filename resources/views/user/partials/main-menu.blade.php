<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-sticky navbar-dark navbar-without-dd-arrow"
     role="navigation" data-menu="menu-wrapper">
    <div class="navbar-header d-xl-none d-block">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                    <div class="brand-logo"><img class="logo" src="{{ asset('frest/images/logo/logo.png') }}"></div>
                    <h2 class="brand-text mb-0">Frest</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <!-- Horizontal menu content-->
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <!-- include ../../includes/mixins-->
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">

            <li class=" nav-item" >
                <a class="nav-link" href="{{ route('admin.dashboard') }}" >
                    <i class="menu-livicon" data-icon="home"></i>
                    <span data-i18n="Dashboard">داشبورد</span>
                </a>
            </li>



            <li class="nav-item" >
                <a class="nav-link" href="{{ route('user.logout') }}">
                    <i class="menu-livicon" data-icon="multiply-alt"></i>
                    <span data-i18n="Dashboard">خروج</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- /horizontal menu content-->
</div>
