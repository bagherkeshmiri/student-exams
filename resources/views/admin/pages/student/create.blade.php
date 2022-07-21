@extends('admin.layouts.master')

@section('title','ایجاد دانش آموز')


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
                            <h5 class="content-header-title float-left pr-1 text-success " style=" border-left: 0 !important;">ایجاد دانش آموز</h5>
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

                                        {{-- Start Flash Message --}}
                                        @include('alerts.flash-message')
                                        {{-- End Flash Message --}}


                                        <form class="form" action="{{ route('admin.user.store') }}" method="post">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'name' , 'content' => 'نام '] )
                                                            @include('frest-components.tags.required-tag')
                                                            @include('frest-components.inputs.input',[ 'type' => 'text' , 'name' => 'name' , 'value' => old('name') , 'classes' => 'text-left' , 'id' => 'name' , 'placeholder' => null , 'dir' => 'ltr' , 'icon' => '<i class="bx bx-user"></i>' , 'attributes' => 'required' , 'options' => null ])
                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'name' ])
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'family' , 'content' => 'نام خانوادگی'] )
                                                            @include('frest-components.tags.required-tag')
                                                            @include('frest-components.inputs.input',[ 'type' => 'text' , 'name' => 'family' , 'value' => old('family') , 'classes' => 'text-left' , 'id' => 'family' , 'placeholder' => null , 'dir' => 'ltr' , 'icon' => '<i class="bx bx-user"></i>' , 'attributes' => 'required' , 'options' => null ])
                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'family' ])
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'username' , 'content' => 'نام کاربری'] )
                                                            @include('frest-components.tags.required-tag')
                                                            @include('frest-components.inputs.input',[ 'type' => 'text' , 'name' => 'username' , 'value' => old('username') , 'classes' => 'text-left' , 'id' => 'username' , 'placeholder' => null , 'dir' => 'ltr' , 'icon' => '<i class="bx bx-user"></i>' , 'attributes' => 'required' , 'options' => null ])
                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'username' ])
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'password' , 'content' => 'رمز عبور '] )
                                                            @include('frest-components.tags.required-tag')
                                                            @include('frest-components.inputs.input',[ 'type' => 'password' , 'name' => 'password' , 'value' => old('password') , 'classes' => 'text-left' , 'id' => 'password' , 'placeholder' => null , 'dir' => 'ltr' , 'icon' => '<i class="bx bx-lock"></i>' , 'attributes' => 'required' , 'options' => null ])
                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'password' ])
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'level' , 'content' => 'سطح'] )
                                                            @include('frest-components.tags.required-tag')
                                                            @include('frest-components.inputs.select2.simple',[ 'data' => $levels , 'id' => 'level' , 'name' => 'level' ])
                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'level' ])
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-flex justify-content-end">
                                                        @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-primary mr-1 mb-1' , 'id' => 'save_btn' , 'content' => __('global.save')  , 'icon' => '<i id="icon-arrow" class="bx bx-save"></i>' ])
                                                        @include('frest-components.inputs.buttons.link-button',[ 'classes' => 'btn btn-danger mr-1 mb-1' , 'id' => 'cancel' , 'content' => __('global.cancel')  , 'icon' => '<i id="icon-arrow" class="bx bx-left-arrow-alt"></i>' ])
                                                    </div>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- select 2 js -->
    <script type="text/javascript" src="{{ asset('/frest/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/frest/js/scripts/forms/select/form-select2.js') }}"></script>


    <script type="text/javascript">

        $("#level").select2({
            placeholder: " -- انتخاب کنید -- ",
            allowClear: true
        });

    </script>



@endsection
