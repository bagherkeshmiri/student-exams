@extends('admin.layouts.master')

@section('title','ایجاد سطح دسترسی')


@section('styles')

    <!-- select 2 css -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('/frest/vendors/css/forms/select/select2.min.css') }}">
@endsection


@section('contents')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 text-success " style=" border-left: 0 !important;">ایجاد سطح دسترسی </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">

                                        <!-- Start Flash Message -->
                                            @include('alerts.flash-message')
                                        <!--  End Flash Message -->

{{--                                        <form class="form" action="{{ route('admin.permissions.store') }}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            <div class="form-body">--}}
{{--                                                <div class="row">--}}

{{--                                                    <div class="col-md-6 col-12">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'name' , 'content' => 'نام '] )--}}
{{--                                                            @include('frest-components.tags.required-tag')--}}
{{--                                                            @include('frest-components.inputs.input',[ 'type' => 'text' , 'name' => 'name' , 'value' => old('name') , 'classes' => 'text-left' , 'id' => 'name' , 'dir' => 'ltr' , 'icon' => userIcon() , 'attributes' => 'required' ])--}}
{{--                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'name' ])--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}


{{--                                                    <div class="col-md-6 col-12">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'family' , 'content' => 'نام خانوادگی'] )--}}
{{--                                                            @include('frest-components.tags.required-tag')--}}
{{--                                                            @include('frest-components.inputs.input',[ 'type' => 'text' , 'name' => 'family' , 'value' => old('family') , 'classes' => 'text-left' , 'id' => 'family' , 'dir' => 'ltr' , 'icon' => userIcon() , 'attributes' => 'required' ])--}}
{{--                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'family' ])--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}


{{--                                                    <div class="col-md-6 col-12">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'mobile' , 'content' => 'موبایل'] )--}}
{{--                                                            @include('frest-components.tags.required-tag')--}}
{{--                                                            @include('frest-components.inputs.input',[ 'type' => 'number' , 'name' => 'mobile' , 'value' => old('mobile') , 'classes' => 'text-left' , 'id' => 'mobile' , 'dir' => 'ltr' , 'icon' => mobileIcon() , 'attributes' => 'required' ])--}}
{{--                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'mobile' ])--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}


{{--                                                    <div class="col-md-6 col-12">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'username' , 'content' => 'نام کاربری'] )--}}
{{--                                                            @include('frest-components.tags.required-tag')--}}
{{--                                                            @include('frest-components.inputs.input',[ 'type' => 'text' , 'name' => 'username' , 'value' => old('username') , 'classes' => 'text-left' , 'id' => 'username' , 'dir' => 'ltr' , 'icon' => userIcon() , 'attributes' => 'required' ])--}}
{{--                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'username' ])--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}


{{--                                                    <div class="col-md-6 col-12">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'password' , 'content' => 'رمز عبور '] )--}}
{{--                                                            @include('frest-components.tags.required-tag')--}}
{{--                                                            @include('frest-components.inputs.input',[ 'type' => 'password' , 'name' => 'password' , 'value' => old('password') , 'classes' => 'text-left' , 'id' => 'password' , 'dir' => 'ltr' , 'icon' => lockIcon() , 'attributes' => 'required' ])--}}
{{--                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'password' ])--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}


{{--                                                    <div class="col-md-6 col-12">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'level' , 'content' => 'سطح'] )--}}
{{--                                                            @include('frest-components.tags.required-tag')--}}
{{--                                                            @include('frest-components.inputs.select2.simple',[ 'data' => null , 'id' => 'level' , 'name' => 'level' ])--}}
{{--                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'level' ])--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="col-12 d-flex justify-content-end">--}}
{{--                                                        @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-primary mr-1 mb-1' , 'id' => 'save_btn' , 'content' => __('global.save')  , 'icon' => saveIcon() ])--}}
{{--                                                        @include('frest-components.inputs.buttons.link-button',[ 'href' => route('admin.user.index') , 'classes' => 'btn btn-danger mr-1 mb-1' , 'id' => 'cancel' , 'content' => __('global.cancel')  , 'icon' => arrowIcon() ])--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}



                                        <form class="form repeater-default" action="{{ route('admin.permissions.store') }}" method="post">
                                            @csrf
                                            <div data-repeater-list="permissions">
                                                <div data-repeater-item>
                                                    <div class="row justify-content-start">



                                                        <div class="col-md-4 col-12">
                                                            <div class="form-group">
                                                                @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'fa_name' , 'content' => 'نام فارسی'] )
                                                                @include('frest-components.tags.required-tag')
                                                                @include('frest-components.inputs.input',[ 'type' => 'text' , 'name' => 'fa_name' , 'value' => old('fa_name') , 'classes' => 'text-left' , 'id' => 'fa_name' , 'dir' => 'ltr' , 'icon' => mobileIcon() , 'attributes' => 'required' ])
                                                                @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'fa_name' ])
                                                            </div>
                                                        </div>


                                                        <div class="col-md-4 col-12">
                                                            <div class="form-group">
                                                                @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'en_name' , 'content' => 'نام لاتین'] )
                                                                @include('frest-components.tags.required-tag')
                                                                @include('frest-components.inputs.input',[ 'type' => 'text' , 'name' => 'en_name' , 'value' => old('en_name') , 'classes' => 'text-left' , 'id' => 'en_name' , 'dir' => 'ltr' , 'icon' => mobileIcon() , 'attributes' => 'required' ])
                                                                @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'en_name' ])
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                            <button class="btn btn-warning text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                حذف
                                                            </button>
                                                        </div>




                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col p-0">
                                                    <button class="btn btn-success" data-repeater-create type="button"><i class="bx bx-plus"></i>
                                                        افزودن
                                                    </button>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-end">
                                                    @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-primary mr-1 mb-1' , 'id' => 'save_btn' , 'content' => __('global.save')  , 'icon' => saveIcon() ])
                                                    @include('frest-components.inputs.buttons.link-button',[ 'href' => route('admin.user.index') , 'classes' => 'btn btn-danger mr-1 mb-1' , 'id' => 'cancel' , 'content' => __('global.cancel')  , 'icon' => arrowIcon() ])
                                                </div>
                                            </div>

                                        </form>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->

            </div>
        </div>
    </div>



@endsection




@section('scripts')

    <!-- Jquery Library CDN -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <!-- select 2 js -->
    <script type="text/javascript" src="{{ asset('/js/select2-functions.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/frest/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/frest/js/scripts/forms/select/form-select2.js') }}"></script>


    <!-- form reapter js -->
    <script type="text/javascript" src="{{ asset('/frest/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/frest/js/scripts/forms/form-repeater.js') }}"></script>


    <script type="text/javascript">
        createSelect2('#level'," -- انتخاب کنید -- ");
    </script>



@endsection
