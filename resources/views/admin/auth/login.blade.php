@extends('user.layouts.auth-master')
@section('title', 'ورود مدیران' )


@section('styles')
@endsection


@section('contents')
    <div class="col-md-6 col-12 px-0">
        <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
            <div class="card-header pb-1">
                <div class="card-title">
                    <h4 class="text-center mb-2"> ورود مدیران </h4>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="d-flex flex-md-row flex-column justify-content-around">
                        <a href="#" class="btn btn-social btn-google btn-block font-small-3 mr-md-1 mb-md-0 mb-1">
                            <i class="bx bxl-google font-medium-3"></i><span class="pl-50 d-block text-center">@lang('global.google')</span></a>
                        <a href="#" class="btn btn-social btn-block mt-0 btn-facebook font-small-3">
                            <i class="bx bxl-facebook-square font-medium-3"></i><span class="pl-50 d-block text-center">@lang('global.facebook')</span></a>
                    </div>
                    <div class="divider">
                        <div class="divider-text text-uppercase text-muted"><small> @lang('login.login_with_email') </small>
                        </div>
                    </div>


                    {{-- Start Flash Message --}}
                    @include('alerts.flash-message')
                    {{-- End Flash Message --}}


                    <form action="{{ route('admin.login') }}" method="post">
                        @csrf
                        <div class="form-group mb-50">
                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'username' , 'content' => 'نام کاربری'] )
                            @include('frest-components.tags.required-tag')
                            @include('frest-components.inputs.input',[ 'type' => 'text' , 'name' => 'username' , 'value' => old('username') , 'classes' => 'text-left' , 'id' => 'username' , 'placeholder' => null , 'dir' => 'ltr' , 'icon' => '<i class="bx bx-mail-send"></i>' , 'attributes' => 'required' , 'options' => null ])
                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'username' ])
                        </div>
                        <div class="form-group">
                            @include('frest-components.inputs.label',[ 'classes' => ['text-bold-700'] , 'id' => null , 'for' => 'password' , 'content' => __('login.password') ] )
                            @include('frest-components.tags.required-tag')
                            @include('frest-components.inputs.input',[ 'type' => 'password' , 'name' => 'password' , 'value' => null , 'classes' => 'text-left' , 'id' => 'password' , 'placeholder' => null , 'dir' => 'ltr' , 'icon' => '<i class="bx bxs-lock"></i>' , 'attributes' => 'required' , 'options' => null ])
                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'password' ])
                        </div>
                        <div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                            <div class="text-left">
                                @include('frest-components.inputs.checkbox',[ 'id' => 'remember' , 'for' => 'remember' , 'main_classes' =>  [ 'checkbox-sm' ] , 'input_classes' => null , 'label_classes' => null  , 'label_content' => __('login.remember_me') ])
                            </div>
                            <div class="text-right line-height-2"><a href="#" class="card-link"><small class="text-warning"> @lang('login.forget_password') </small></a></div>
                        </div>
                        @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-primary glow w-100 position-relative mt-2' , 'id' => 'register_btn' , 'content' => __('global.login')  , 'icon' => '<i id="icon-arrow" class="bx bx-left-arrow-alt"></i>' ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




@section('scripts')


@endsection
