@extends('user.layouts.master')

@section('title','پروفایل')

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('frest/css/pages/page-user-profile.css') }}">

@endsection



@section('contents')


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><!-- page user profile start -->
                <section class="page-user-profile">
                    <div class="row">
                        <div class="col-12">
                            <!-- user profile heading section start -->
                            <div class="card">
                                <div class="card-content">
                                    <div class="user-profile-images">
                                        <!-- user timeline image -->
                                        <img src="{{ asset('frest/images/profile/post-media/profile-banner.jpg') }}"
                                             class="img-fluid rounded-top user-timeline-image"
                                             alt="user timeline image">
                                        <!-- user profile image -->
                                        <img src="{{ asset('frest/images/portrait/small/avatar-s-16.png') }}"
                                             class="user-profile-image rounded-circle" alt="user profile image" height="140"
                                             width="140">
                                    </div>
                                    <div class="user-profile-text">
                                        <h4 class="mb-0 text-bold-500 profile-text-color">{{ $user->full_name }}</h4>
{{--                                        <small>توسعه دهنده</small>--}}
                                    </div>
                                    <!-- user profile nav tabs start -->
                                    <div class="card-body px-0">
                                        <ul class="nav user-profile-nav justify-content-center justify-content-md-start nav-tabs border-bottom-0 mb-0"
                                            role="tablist">
                                            <li class="nav-item pb-0">
                                                <a class="nav-link d-flex px-1 active align-items-center" id="main-tab"
                                                   data-toggle="tab" href="#main" aria-controls="main" role="tab"
                                                   aria-selected="true"><i class="bx bx-home"></i><span
                                                        class="d-none d-md-block">اصلی</span></a>
                                            </li>
                                            <li class="nav-item pb-0">
                                                <a class="nav-link d-flex px-1 align-items-center" id="password-tab"
                                                   data-toggle="tab" href="#password" aria-controls="password"
                                                   role="tab" aria-selected="false"><i class="bx bx-lock"></i><span
                                                        class="d-none d-md-block">تغییر رمز عبور</span></a>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- user profile nav tabs ends -->
                                </div>
                            </div>
                            <!-- user profile heading section ends -->

                            <!-- user profile content section start -->
                            <div class="row">
                                <!-- user profile nav tabs content start -->
                                <div class="col-lg-12">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="main" aria-labelledby="main-tab"
                                             role="tabpanel">
                                            <!-- user profile nav tabs main start -->
                                            <div class="row">

                                                <div class="card">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <h5 class="card-title">اطلاعات کامل</h5>
                                                            <ul class="list-unstyled line-height-2">
                                                                <li class="mb-1"><i class="cursor-pointer bx bx-map align-middle mr-50"></i>تهران</li>
                                                                <li class="mb-1"><i class="cursor-pointer bx bx-phone-call align-middle mr-50"></i><span class="ltr-text">(+56) 454 45654</span></li>
                                                                <li class="mb-1"><i class="cursor-pointer bx bx-time align-middle mr-50"></i>10 مهر</li>
                                                                <li class="mb-1"><i class="cursor-pointer bx bx-envelope align-middle mr-50"></i>Jonnybravo@gmail.com</li>
                                                            </ul>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h6 class="mb-0"><small class="text-muted">شماره موبایل</small></h6>
                                                                    <p><span class="ltr-text">(+46) 456 54432</span></p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6 class="mb-0"><small class="text-muted">شماره تلفن</small></h6>
                                                                    <p><span class="ltr-text">(+46) 454 22432</span></p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6 class="mb-0"><small class="text-muted">معرفی کننده</small></h6>
                                                                    <p>تونی استارک</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6 class="mb-0"><small class="text-muted">مدیر</small></h6>
                                                                    <p>جان اسنو</p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <h6 class="mb-0"><small class="text-muted">بیوگرافی</small></h6>
                                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای</p>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-sm d-none d-sm-block float-right btn-light-primary mb-2">
                                                                <i class="cursor-pointer bx bx-edit font-small-3 mr-50"></i><span>ویرایش</span>
                                                            </button>
                                                            <button class="btn btn-sm d-block d-sm-none btn-block text-center btn-light-primary">
                                                                <i class="cursor-pointer bx bx-edit font-small-3 mr-25"></i><span>ویرایش</span></button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- user profile nav tabs main ends -->
                                        </div>
                                        <div class="tab-pane " id="password" aria-labelledby="password-tab"
                                             role="tabpanel">
                                            <!-- user profile nav tabs password start -->
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">

                                                        {{-- Start Flash Message --}}
                                                        @include('alerts.flash-message')
                                                        {{-- End Flash Message --}}



                                                        <form class="form" action="{{ route('user.profile.changePassword') }}" method="post">
                                                            @csrf
                                                            <div class="form-body">
                                                                <div class="row">

                                                                    <div class="col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'old_pass' , 'content' => 'رمز عبور قبلی'] )
                                                                            @include('frest-components.tags.required-tag')
                                                                            @include('frest-components.inputs.input',[ 'type' => 'password' , 'name' => 'old_pass' , 'value' => old('old_pass') , 'classes' => 'text-left' , 'id' => 'old_pass' , 'dir' => 'ltr' , 'icon' => lockIcon() , 'attributes' => 'required' ])
                                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'old_pass' ])
                                                                        </div>
                                                                    </div>




                                                                    <div class="col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'password' , 'content' => 'رمز عبور جدید'] )
                                                                            @include('frest-components.tags.required-tag')
                                                                            @include('frest-components.inputs.input',[ 'type' => 'password' , 'name' => 'password' , 'value' => old('password') , 'classes' => 'text-left' , 'id' => 'password' , 'dir' => 'ltr' , 'icon' => lockIcon() , 'attributes' => 'required' ])
                                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'password' ])
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'password_confirmation' , 'content' => ' تکرار رمز عبور جدید'] )
                                                                            @include('frest-components.tags.required-tag')
                                                                            @include('frest-components.inputs.input',[ 'type' => 'password' , 'name' => 'password_confirmation' , 'value' => old('password_confirmation') , 'classes' => 'text-left' , 'id' => 'password_confirmation' , 'dir' => 'ltr' , 'icon' => lockIcon() , 'attributes' => 'required' ])
                                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'password_confirmation' ])
                                                                        </div>
                                                                    </div>




                                                                    <div class="col-12 d-flex justify-content-end">
                                                                        @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-primary mr-1 mb-1' , 'id' => 'save_btn' , 'content' => 'تغییر'  , 'icon' => saveIcon() ])
                                                                        @include('frest-components.inputs.buttons.link-button',[ 'href' => route('user.profile.index') , 'classes' => 'btn btn-danger mr-1 mb-1' , 'id' => 'cancel' , 'content' => __('global.cancel')  , 'icon' => arrowIcon() ])
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user profile nav tabs password start -->
                                        </div>

                                    </div>
                                </div>
                                <!-- user profile nav tabs content ends -->

                            </div>
                            <!-- user profile content section start -->
                        </div>
                    </div>
                </section>
                <!-- page user profile ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection




@section('scripts')


    <script type="text/javascript" src="{{ asset('frest/js/scripts/pages/page-user-profile.js') }}"></script>

@endsection
