@extends('admin.layouts.master')

@section('title','ویرایش سوال')


@section('styles')

    <!-- select 2 css -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('/frest/vendors/css/forms/select/select2.min.css') }}">


    <style>
        textarea {
            resize: none;
        }
    </style>

@endsection



@section('contents')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 text-success " style=" border-left: 0 !important;">ویرایش سوال</h5>
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


                                        <form class="form" action="{{ route('admin.question.update',[ 'question' => $question->id ]) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="form-body">
                                                <div class="row">

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'link' , 'content' => 'لینک '] )
                                                            @include('frest-components.tags.required-tag')
                                                            @include('frest-components.inputs.input',[ 'type' => 'text' , 'name' => 'link' , 'value' => $question->link , 'classes' => 'text-left' , 'id' => 'link' , 'dir' => 'ltr' , 'icon' => linkIcon() , 'attributes' => 'required' ])
                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'link' ])
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700', 'for' => 'user_id' , 'content' => 'دانش آموز'] )
                                                            @include('frest-components.tags.required-tag')
                                                            @include('frest-components.inputs.select2.simple',[ 'data' => $students , 'id' => 'user_id' , 'name' => 'user_id' , 'attributes' => 'required' , 'selected_value' => $question->users[0]->id ])
                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'user_id' ])
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'admin_id' , 'content' => ' تصحیح کننده'] )
                                                            @include('frest-components.tags.required-tag')
                                                            @include('frest-components.inputs.select2.simple',[ 'data' => $admins , 'id' => 'admin_id' , 'name' => 'admin_id' , 'attributes' => 'required'  , 'selected_value' => $question->admin->id  ])
                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'admin_id' ])
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'response_deadline' , 'content' => 'مهلت پاسخ گویی (دقیقه)'] )
                                                            @include('frest-components.tags.required-tag')
                                                            @include('frest-components.inputs.input',[ 'type' => 'number' , 'name' => 'response_deadline' , 'value' => $question->response_deadline , 'classes' => 'text-left' , 'id' => 'link' , 'dir' => 'ltr' , 'icon' => timerIcon() , 'attributes' => 'required' ])
                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'response_deadline' ])
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12 col-12 mb-2">
                                                        @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'textarea-counter' , 'content' => 'متن '] )
                                                        @include('frest-components.tags.required-tag')
                                                        @include('frest-components.inputs.textarea' , [ 'rows' => 10  , 'name' => 'text' , 'attributes' => 'required' , 'contents' => $question->text ])
                                                        @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'text' ])
                                                    </div>


                                                    <div class="col-12 d-flex justify-content-end">
                                                        @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-primary mr-1 mb-1' , 'id' => 'save_btn' , 'content' => __('global.edit')  , 'icon' => saveIcon() ])
                                                        @include('frest-components.inputs.buttons.link-button',[ 'href' => route('admin.question.index') , 'classes' => 'btn btn-danger mr-1 mb-1' , 'id' => 'cancel' , 'content' => __('global.cancel')  , 'icon' => arrowIcon() ])
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
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <!-- select 2 js -->
    <script type="text/javascript" src="{{ asset('/js/select2-functions.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/frest/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/frest/js/scripts/forms/select/form-select2.js') }}"></script>

    <script type="text/javascript">
        createSelect2('#user_id'," -- انتخاب کنید -- ");
        createSelect2('#admin_id'," -- انتخاب کنید -- ");
    </script>



@endsection
