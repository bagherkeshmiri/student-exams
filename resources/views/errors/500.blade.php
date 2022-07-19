@extends('user.layouts.errors-master')

@section('title', __('Server Error'))


@section('contents')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><!-- error 500 -->
                <section class="row flexbox-container">
                    <div class="col-xl-6 col-md-7 col-9">
                        <!-- w-100 for IE specific -->
                        <div class="card bg-transparent shadow-none">
                            <div class="card-content">
                                <div class="card-body text-center bg-transparent miscellaneous">
                                    <img src="../../assets/images/pages/500.png" class="img-fluid my-3" alt="branding logo">
                                    <h1 class="error-title mt-1">خطای داخلی سرور!</h1>
                                    <p class="p-2">
                                        پس از پاکسازی حافظه کش و حذف کوکی ها مرورگر را ریستارت کنید. <br> ایراد ها توسط دسترسی های نادرست فایل ها و پوشه ها به وجود آمده اند.
                                    </p>
                                    <a href="index.html" class="btn btn-primary round glow">بازگشت به خانه</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- error 500 end -->
            </div>
        </div>
    </div>

@endsection
