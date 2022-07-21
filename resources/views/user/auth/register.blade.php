@extends('user.layouts.auth-master')
@section('title', __('global.register') )


@section('styles')
@endsection


@section('contents')
    <div class="col-md-6 col-12 px-0">
        <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
            <div class="card-header pb-1">
                <div class="card-title">
                    <h4 class="text-center mb-2"> @lang('global.register')</h4>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="#" method="post">
                        @csrf

                        <div class="form-group mb-50">

                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'email' , 'content' => __('register.email') ] )
                            @include('frest-components.tags.required-tag')
                            @include('frest-components.inputs.input',[ 'type' => 'email' , 'name' => 'email' , 'value' => old('email') ,'classes' => 'text-left' , 'id' => 'email' , 'placeholder' => null , 'dir' => 'ltr' , 'icon' => '<i class="bx bx-mail-send"></i>' , 'attributes' => 'required' , 'options' => null ])
                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'email' ])
                        </div>

                        <div class="form-group mb-50">

                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'mobile' , 'content' => __('register.mobile') ] )
                            @include('frest-components.tags.required-tag')
                            @include('frest-components.inputs.input',[ 'type' => 'nubmer' , 'name' => 'mobile' , 'value' => old('mobile') ,'classes' => 'text-left' , 'id' => 'mobile' , 'placeholder' => null , 'dir' => 'ltr' , 'icon' => '<i class="bx bx-mobile"></i>' , 'attributes' => 'required' , 'options' => null ])
                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'mobile' ])
                        </div>

                        <div class="form-group mb-50">
                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'password' , 'content' => __('register.password') ] )
                            @include('frest-components.tags.required-tag')
                            @include('frest-components.inputs.input',[ 'type' => 'password' , 'name' => 'password' , 'value' => null , 'classes' => 'text-left' , 'id' => 'password' , 'placeholder' => null , 'dir' => 'ltr' , 'icon' => '<i class="bx bxs-lock"></i>' , 'attributes' => 'required' , 'options' => null ])
                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'password' ])
                        </div>

                        <div class="form-group mb-50">
                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'password_confirmation' , 'content' => __('register.repeat_password') ] )
                            @include('frest-components.tags.required-tag')
                            @include('frest-components.inputs.input',[ 'type' => 'password' , 'name' => 'password_confirmation' , 'value' => null , 'classes' => 'text-left' , 'id' => 'password_confirmation' , 'placeholder' => null , 'dir' => 'ltr' , 'icon' => '<i class="bx bxs-lock"></i>' , 'attributes' => 'required' , 'options' => null ])
                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'password_confirmation' ])
                        </div>

                        <div class="form-group mb-50">
                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'introduced_code' , 'content' => __('register.identification_code') ] )
                            @include('frest-components.inputs.input',[ 'type' => 'introduced_code' , 'name' => 'introduced_code' , 'value' => old('introduced_code') , 'classes' => 'text-left' , 'id' => 'introduced_code' , 'placeholder' => null , 'dir' => 'ltr' , 'icon' => '<i class="bx bx-user"></i>' , 'attributes' => null , 'options' => null ])
                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'introduced_code' ])
                        </div>

                        @include('frest-components.inputs.buttons.no-submit-button', [ 'classes' => 'btn btn-primary glow w-100 position-relative mt-2' , 'id' => 'register_btn' , 'content' => __('global.register')  , 'icon' => '<i id="icon-arrow" class="bx bx-left-arrow-alt"></i>' , 'events' =>  'onclick=test()' ])
                    </form>
                    <hr>
                    <div class="text-center"><small class="mr-25">@lang('register.have_account')</small><a href="{{ route('user.show-login')  }}"><small class="text-success">@lang('global.login')</small> </a></div>
                </div>
            </div>
        </div>
    </div>
@endsection




@section('scripts')



@endsection
