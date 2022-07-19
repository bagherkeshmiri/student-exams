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
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                  data-toggle="dropdown">
                    <i class="menu-livicon" data-icon="desktop"></i>
                    <span data-i18n="Dashboard">داشبورد</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="active" data-menu=""><a class="dropdown-item align-items-center" href="#"
                                                       data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>تجارت
                            الکترونیک</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="dashboard-analytics.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>آمار تحلیلی</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                  data-toggle="dropdown"><i class="menu-livicon"
                                                                                            data-icon="comments"></i><span>برنامه ها</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li data-menu=""><a class="dropdown-item align-items-center" href="app-email.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ایمیل</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="app-chat.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>گفتگو</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="app-todo.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>وظایف</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="app-calendar.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>تقویم</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="app-kanban.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>یادداشت ها</a>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>صورتحساب</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="app-invoice-list.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>لیست صورتحساب
                                    ها</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="app-invoice.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>صورتحساب</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="app-invoice-edit.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ویرایش
                                    صورتحساب</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="app-invoice-add.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>افزودن
                                    صورتحساب</a>
                            </li>
                        </ul>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="app-file-manager.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>مدیریت فایل</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                  data-toggle="dropdown"><i class="menu-livicon"
                                                                                            data-icon="briefcase"></i><span>رابط کاربری</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>محتوا</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="content-grid.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>توری</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="content-typography.html"
                                                data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>تایپوگرافی</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="content-text-utilities.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>ابزار متن</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="content-syntax-highlighter.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>هایلایت Syntax</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="content-helper-classes.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>کلاس های کمکی</a>
                            </li>
                        </ul>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="colors.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>رنگ ها</a>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>آیکن‌ها</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="icons-boxicons.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>Boxicons</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="icons-livicons.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>LivIcons</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>کارت</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="card-basic.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>پایه</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="card-actions.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>عملیات های
                                    کارت</a>
                            </li>
                        </ul>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="widgets.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ویجت‌ها</a>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>اجزاء</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-alerts.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>اعلان‌ها</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="component-buttons-basic.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>دکمه ها</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="component-breadcrumbs.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>مسیر ناوبری</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-carousel.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>گردونه</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-collapse.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>باز و بسته
                                    شونده</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-dropdowns.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>منوی
                                    کشویی</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="component-list-group.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>گروه لیست</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-modals.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>مودال ها</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="component-pagination.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>صفحه‌بندی</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-navbar.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>نوار
                                    ناوبری</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="component-tabs-component.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>سربرگ ها</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="component-pills-component.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>سربرگ های دکمه ای</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-tooltips.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>تولتیپ ها</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-popovers.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>پاپ اور</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-badges.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>نشان ها</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="component-pill-badges.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>نشان های قرصی</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-progress.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>پیشرفت</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="component-media-objects.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>رسانه ها</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-spinner.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>چرخنده</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="component-bs-toast.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>اعلان
                                    توست</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>اجزای بیشتر</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="ex-component-avatar.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>آواتار</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="ex-component-chips.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ژتون ها</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="ex-component-divider.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>جدا کننده</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>افزونه ها</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="ext-component-sweet-alerts.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>هشدار Sweet</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="ext-component-toastr.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>اعلان Toastr</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="ext-component-noui-slider.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>اسلایدر NoUi</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="ext-component-drag-drop.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>کشیدن و رها کردن</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="ext-component-tour.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>تور</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="ext-component-swiper.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>گردونه Swiper</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="ext-component-treeview.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>نمایش درختی</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="ext-component-block-ui.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>رابط کاربری بلوک</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="ext-component-media-player.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>پخش کننده رسانه</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="ext-component-miscellaneous.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>متفرقه</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="ext-component-i18n.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>چند زبانی</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                  data-toggle="dropdown"><i class="menu-livicon"
                                                                                            data-icon="thumbnails-big"></i><span>فرم ها و جدول ها</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>عناصر فرم</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="form-inputs.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ورودی</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="form-input-groups.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>گروه های
                                    ورودی</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="form-number-input.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ورودی عدد</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="form-select.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>انتخاب</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="form-radio.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>دکمه های
                                    رادیویی</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="form-checkbox.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>چک باکس</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="form-switch.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>سوییچ</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="form-textarea.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ناحیه
                                    متنی</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="form-quill-editor.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ویرایشگر
                                    Quill</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="form-file-uploader.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ارسال کننده
                                    فایل</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="form-date-time-picker.html" data-toggle="dropdown"><i
                                        class="bx bx-left-arrow-alt"></i>انتخاب گر تاریخ و زمان</a>
                            </li>
                        </ul>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="form-layout.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>طرح های فرم</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="form-wizard.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فرم مرحله ای</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="form-validation.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>اعتبارسنجی فرم</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="form-repeater.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فرم تکرار شونده</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="table.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>جدول</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="table-extended.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>جدول پیشرفته</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="table-datatable.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>جدول اطلاعات</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                  data-toggle="dropdown"><i class="menu-livicon"
                                                                                            data-icon="notebook"></i><span>صفحات</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li data-menu=""><a class="dropdown-item align-items-center" href="page-user-profile.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>پروفایل کاربر</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="page-faq.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>سوالات متداول</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="page-knowledge-base.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>پایگاه دانش</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="page-search.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>جستجو</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="page-account-settings.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>تنظیمات حساب
                            کاربری</a>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>کاربران</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="page-users-list.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>لیست</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="page-users-view.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>مشاهده</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="page-users-edit.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ویرایش</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>طرح های شروع</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="../../starter-kit/horizontal-menu-template-dark/sk-layout-1-column.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>1 ستون</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="../../starter-kit/horizontal-menu-template-dark/sk-layout-2-columns.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>2 ستون</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="../../starter-kit/horizontal-menu-template-dark/sk-layout-fixed-navbar.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>نوار بالایی
                                    ثابت</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="../../starter-kit/horizontal-menu-template-dark/sk-layout-fixed.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>طرح ثابت</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="../../starter-kit/horizontal-menu-template-dark/sk-layout-static.html"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>طرح ایستا</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>احراز هویت</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="auth-login.html"
                                                data-toggle="dropdown" target="_blank"><i
                                        class="bx bx-left-arrow-alt"></i>ورود</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="auth-register.html"
                                                data-toggle="dropdown" target="_blank"><i
                                        class="bx bx-left-arrow-alt"></i>ثبت نام</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center"
                                                href="auth-forgot-password.html" data-toggle="dropdown" target="_blank"><i
                                        class="bx bx-left-arrow-alt"></i>فراموشی رمز عبور</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="auth-reset-password.html"
                                                data-toggle="dropdown" target="_blank"><i
                                        class="bx bx-left-arrow-alt"></i>بازنشانی رمز عبور</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="auth-lock-screen.html"
                                                data-toggle="dropdown" target="_blank"><i
                                        class="bx bx-left-arrow-alt"></i>قفل صفحه</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>متفرقه</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="page-coming-soon.html"
                                                data-toggle="dropdown" target="_blank"><i
                                        class="bx bx-left-arrow-alt"></i>به زودی</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="error-404.html"
                                                data-toggle="dropdown" target="_blank"><i
                                        class="bx bx-left-arrow-alt"></i>404</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="error-500.html"
                                                data-toggle="dropdown" target="_blank"><i
                                        class="bx bx-left-arrow-alt"></i>500</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="page-not-authorized.html"
                                                data-toggle="dropdown" target="_blank"><i
                                        class="bx bx-left-arrow-alt"></i>دسترسی غیرمجاز</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="page-maintenance.html"
                                                data-toggle="dropdown" target="_blank"><i
                                        class="bx bx-left-arrow-alt"></i>تعمیرات</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                  data-toggle="dropdown"><i class="menu-livicon"
                                                                                            data-icon="pie-chart"></i><span>نمودار ها و نقشه ها</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li data-menu=""><a class="dropdown-item align-items-center" href="chart-apex.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>Apex</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="chart-chartjs.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>Chartjs</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="chart-chartist.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>Chartist</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item align-items-center" href="maps-google.html"
                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>نقشه های گوگل</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                  data-toggle="dropdown"><i class="menu-livicon"
                                                                                            data-icon="morph-folder"></i><span>سایر</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="bx bx-left-arrow-alt"></i>سطح های فهرست</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="#"
                                                data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>سطح دوم</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item align-items-center dropdown-toggle" href="#"
                                    data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>سطح دوم</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li data-menu=""><a class="dropdown-item align-items-center" href="#"
                                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>سطح
                                            سوم</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item align-items-center" href="#"
                                                        data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>سطح
                                            سوم</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="disabled" data-menu=""><a class="dropdown-item align-items-center" href="#"
                                                         data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>گزینه
                            غیرفعال</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /horizontal menu content-->
</div>
