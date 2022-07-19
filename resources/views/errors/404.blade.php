@extends('user.layouts.errors-master')

@section('title', __('Not Found'))

@section('contents')


    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><!-- error 404 -->
                <section class="row flexbox-container">
                    <div class="col-xl-6 col-md-7 col-9">
                        <div class="card bg-transparent shadow-none">
                            <div class="card-content">
                                <div class="card-body text-center bg-transparent miscellaneous">
                                    <h1 class="error-title">صفحه یافت نشد :(</h1>
                                    <p class="pb-3">
                                        صفحه ای که به دنبال آن هستید موجود نیست</p>
                                    <img class="img-fluid" src="{{ asset('frest/images/pages/404.png') }} " alt="404 error">
{{--                                    @auth('user')--}}
{{--                                        <a href="{{ route('user.dashboard') }}" class="btn btn-primary round glow mt-3">بازگشت به خانه</a>--}}
{{--                                    @endauth--}}

{{--                                    @guest('user')--}}
{{--                                        <a href="{{ route('home') }}" class="btn btn-primary round glow mt-3">بازگشت به خانه</a>--}}
{{--                                    @endguest--}}

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- error 404 end -->
            </div>
        </div>
    </div>

@endsection
