@extends('admin.layouts.master')

@section('title','تصحیح سوال')


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
                            <h5 class="content-header-title float-left pr-1 text-success " style=" border-left: 0 !important;">تصحیح سوال</h5>
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

                                        <div class="d-flex flex-row justify-content-start flex-wrap">
                                            <div class="p-2">
                                                @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => ' ' , 'content' => 'لینک'] ) :
                                                <span class="mr-2 ml-2">{{ $question->link }}</span>
                                            </div>

                                            <div class="p-2">
                                                @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => ' ' , 'content' => 'مدت پاسخ (دقیقه)'] ) :
                                                <span class="mr-2 ml-2">{{ $question->response_deadline }}</span>
                                            </div>


                                            <div class="p-2">
                                                @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => ' ' , 'content' => 'دانش آموز'] ) :
                                                <span class="mr-2 ml-2">{{ $question->users()->first()->full_name }}</span>
                                            </div>


                                            <div class="p-2">
                                                @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => ' ' , 'content' => 'تاریخ پاسخگویی'] ) :
                                                <span class="mr-2 ml-2">{{ $question->getJalaliResponseTime() }}</span>
                                            </div>


                                            <div class="p-2">
                                                @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => ' ' , 'content' => 'متن سوال'] ) :
                                                <span class="mr-2 ml-2">{{ $question->text }}</span>
                                            </div>


                                            <div class="p-2">
                                                @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => ' ' , 'content' => 'پاسخ دانش آموز '] ) :
                                                <span class="mr-2 ml-2">@isset($question->answer->text) {{ $question->answer->text }} @endisset</span>
                                            </div>


                                        </div>


                                        @include('frest-components.dividers.warning-divider' , [ 'title' => 'تصحیح سوال '])


                                        <form class="form" action="{{ route('admin.correction.store',['question' => $question->id ]) }}" method="post">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">

                                                    <div class="col-md-6 col-12 mb-2">
                                                        @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'correct_text' , 'content' => 'عبارت صحیح '] )
                                                        @include('frest-components.tags.required-tag')
                                                        @include('frest-components.inputs.textarea' , [ 'rows' => 8  , 'name' => 'correct_text' , 'contents' => (is_null($question->answer->correct_statement)) ? old('correct_text') : $question->answer->correct_statement ])
                                                        @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'correct_text'])
                                                    </div>


                                                    <div class="col-md-6 col-12 mb-2">
                                                        @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'incorrect_text' , 'content' => 'عبارت غلط '] )
                                                        @include('frest-components.tags.required-tag')
                                                        @include('frest-components.inputs.textarea' , [ 'rows' => 8  , 'name' => 'incorrect_text' , 'contents' => (is_null($question->answer->incorrect_statement)) ? old('incorrect_text') : $question->answer->incorrect_statement ])
                                                        @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'incorrect_text'])
                                                    </div>


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'answer_status' , 'content' => 'وضعیت پاسخ'] )
                                                            @include('frest-components.tags.required-tag')
                                                            @include('frest-components.inputs.select2.simple',[ 'data' => $answer_status , 'id' => 'answer_status' , 'name' => 'answer_status' , 'attributes' => 'required'  , 'selected_value' => $question->answer->status ])
                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'answer_status' ])
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-flex justify-content-end">
                                                        @if($question->status != \App\Enums\Questions\QuestionStatus::Confirmed )
                                                            @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-primary mr-1 mb-1' , 'id' => 'save_btn' , 'content' => __('global.save')  , 'icon' => saveIcon() ])
                                                        @endif
                                                        @include('frest-components.inputs.buttons.link-button',[ 'href' => route('admin.correction.index') , 'classes' => 'btn btn-danger mr-1 mb-1' , 'id' => 'cancel' , 'content' => __('global.cancel')  , 'icon' => arrowIcon() ])
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
        createSelect2('#answer_status', " -- انتخاب کنید -- ");
    </script>



@endsection
