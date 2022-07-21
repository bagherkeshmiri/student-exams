<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-static-top bg-primary navbar-brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item"><a class="navbar-brand" href="#">
                    <div class="brand-logo"><img class="logo" src="{{ asset('frest/images/logo/logo-light.png')  }}">
                    </div>
                    <h2 class="brand-text mb-0">Frest</h2></a></li>
        </ul>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu mr-auto"><a class="nav-link nav-menu-main menu-toggle" href="#"><i
                                    class="bx bx-menu"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right d-flex align-items-center">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                                                       id="dropdown-flag" href="#"
                                                                       data-toggle="dropdown" aria-haspopup="true"
                                                                       aria-expanded="false"><i
                                class="flag-icon flag-icon-ir"></i><span class="selected-language d-lg-inline d-none">فارسی</span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a
                                class="dropdown-item" href="#" data-language="fa"><i
                                    class="flag-icon flag-icon-ir mr-50"></i>فارسی</a><a class="dropdown-item" href="#"
                                                                                         data-language="en"><i
                                    class="flag-icon flag-icon-us mr-50"></i>انگلیسی</a><a class="dropdown-item"
                                                                                           href="#"
                                                                                           data-language="fr"><i
                                    class="flag-icon flag-icon-fr mr-50"></i>فرانسوی</a><a class="dropdown-item"
                                                                                           href="#"
                                                                                           data-language="de"><i
                                    class="flag-icon flag-icon-de mr-50"></i>آلمانی</a><a class="dropdown-item" href="#"
                                                                                          data-language="pt"><i
                                    class="flag-icon flag-icon-pt mr-50"></i>پرتغالی</a></div>
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                                                           data-toggle="dropdown"><i
                                class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span
                                class="badge badge-pill badge-danger badge-up">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span
                                        class="notification-title">7 اعلان جدید</span><span
                                        class="text-bold-400 cursor-pointer">علامت خوانده شده به همه</span></div>
                            </li>
                            <li class="scrollable-container media-list"><a class="d-flex justify-content-between"
                                                                           href="javascript:void(0)">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img
                                                    src="{{ asset('frest/images/portrait/small/avatar-s-11.jpg') }}"
                                                    alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">تبریک بابت دریافت جوایز</span>
                                                در مسابقات سالانه</h6><small class="notification-text">15 اردیبهشت 12:32
                                                ب.ظ</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="d-flex justify-content-between read-notification cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img
                                                    src="{{ asset('frest/images/portrait/small/avatar-s-16.jpg')  }}"
                                                    alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">پیام جدید</span>
                                                دریافت شد</h6><small class="notification-text">شما 18 پیام خوانده نشده
                                                دارید</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center py-0">
                                        <div class="media-left pr-0"><img class="mr-1"
                                                                          src="{{ asset('frest/images/icon/sketch-mac-icon.png') }}"
                                                                          alt="avatar" height="39" width="39"></div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span
                                                    class="text-bold-500">به روز رسانی آماده است</span></h6><small
                                                class="notification-text">لورم ایپسوم متن ساختگی با تولید سادگی</small>
                                        </div>
                                        <div class="media-right pl-0">
                                            <div class="row border-left text-center">
                                                <div class="col-12 px-50 py-50 border-bottom">
                                                    <h6 class="media-heading text-bold-500 mb-0">به‌روزرسانی</h6>
                                                </div>
                                                <div class="col-12 px-50 py-50">
                                                    <h6 class="media-heading mb-0">بستن</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span
                                                    class="avatar-content text-primary font-medium-2">ل‌د</span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">مشتری جدید</span> ثبت
                                                نام کرد</h6><small class="notification-text">1 ساعت پیش</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer">
                                    <div class="media d-flex align-items-center justify-content-between">
                                        <div class="media-left pr-0">
                                            <div class="media-body">
                                                <h6 class="media-heading">پیشنهاد های جدید</h6>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="custom-control custom-switch">
                                                <input class="custom-control-input" type="checkbox" checked
                                                       id="notificationSwtich">
                                                <label class="custom-control-label" for="notificationSwtich"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-danger bg-lighten-5 mr-1 m-0 p-25"><span
                                                    class="avatar-content"><i
                                                        class="bx bxs-heart text-danger"></i></span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">نرم افزار</span> تایید
                                                شد</h6><small class="notification-text">6 ساعت پیش</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between read-notification cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img
                                                    src="{{ asset('frest/images/portrait/small/avatar-s-4.jpg') }}"
                                                    alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">فایل جدید</span> ارسال
                                                شد</h6><small class="notification-text">4 ساعت پیش</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-rgba-danger m-0 mr-1 p-25">
                                                <div class="avatar-content"><i class="bx bx-detail text-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">گزارش بودجه</span>
                                                ایجاد شد</h6><small class="notification-text">25 ساعت پیش</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center border-0">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img
                                                    src="{{ asset('frest/images/portrait/small/avatar-s-16.jpg') }}"
                                                    alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">مشتری جدید</span>
                                                دیدگاهی ارسال کرد</h6><small class="notification-text">2 روز پیش</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-menu-footer"><a
                                    class="dropdown-item p-50 text-primary justify-content-center"
                                    href="javascript:void(0)">خواندن همه اعلان ها</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                                                                   href="#" data-toggle="dropdown">
                            <div class="user-nav d-lg-flex d-none"><span
                                    class="user-name">{{ auth('admin')->user()->getFullName() }}</span><span
                                    class="user-status"></span></div>
                            <span><img class="round" src="{{ asset('frest/images/portrait/small/avatar-s-11.jpg') }}"
                                       alt="avatar" height="40" width="40"></span></a>
{{--                        <div class="dropdown-menu pb-0">--}}
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <i class="bx bx-user mr-50"></i>--}}
{{--                                ویرایش پروفایل--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <i class="bx bx-envelope mr-50"></i>--}}
{{--                                صندوق ورودی من--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <i class="bx bx-check-square mr-50"></i>--}}
{{--                                وظیفه--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item"--}}
{{--                               href="#"><i class="bx bx-message mr-50"></i>--}}
{{--                                گفتگو ها--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider mb-0"></div>--}}
{{--                            <a class="dropdown-item" href="{{ route('admin.logout') }}">--}}
{{--                                <i class="bx bx-power-off mr-50"></i>--}}
{{--                                خروج--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
