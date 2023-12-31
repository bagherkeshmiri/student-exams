@extends('user.layouts.master')


@section('title',' پاسخ به سوال')


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
                            <h5 class="content-header-title float-left pr-1 text-success " style=" border-left: 0 !important;"> پاسخ به سوال</h5>
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
                                                @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => ' ' , 'content' => 'متن سوال'] ) :
                                                <span class="mr-2 ml-2">{{ $question->text }}</span>
                                            </div>

                                        </div>


                                        @include('frest-components.dividers.warning-divider' , [ 'title' => 'ثبت پاسخ'])


                                        <form class="form" action="{{ route('user.answer.store', ['question' => $question->id ]) }}" method="post">
                                            @csrf

                                            <div class="form-body">
                                                <div class="row">

                                                    <div class="col-md-12 col-12 mb-2">
                                                        @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'textarea-counter' , 'content' => 'پاسخ '] )
                                                        @include('frest-components.tags.required-tag')
                                                        @if(is_null($answer))
                                                            @include('frest-components.inputs.textarea' , [ 'rows' => 5  , 'name' => 'text' , 'attributes' => 'required' ])
                                                        @else
                                                            @include('frest-components.inputs.textarea' , [ 'rows' => 5  , 'name' => 'text' , 'attributes' => 'readonly' , 'contents' => $answer->text ])
                                                        @endif
                                                        @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'text'])
                                                    </div>





                                                    @if(!is_null($answer))

                                                        @include('frest-components.dividers.danger-divider' , [ 'title' => 'پاسخ تصحیح کننده'])

                                                        <div class="d-flex flex-row justify-content-between flex-wrap">
                                                            <div class="p-2 flex-column ">
                                                                @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => ' ' , 'content' => 'عبارت درست'] ) :
                                                                <span class="mr-2 ml-2">{{ $answer->correct_statement }}</span>
                                                            </div>

                                                            <div class="p-2 flex-column ">
                                                                @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => ' ' , 'content' => 'عبارت غلط'] ) :
                                                                <span class="mr-2 ml-2">{{ $answer->incorrect_statement }}</span>
                                                            </div>

                                                        </div>

                                                    @endif



                                                    <div class="col-12 d-flex justify-content-end">
                                                        @if(is_null($answer))
                                                            @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-primary mr-1 mb-1' , 'id' => 'save_btn' , 'content' => 'پاسخ'  , 'icon' => saveIcon() ])
                                                        @else
                                                            @if(is_null($question->protest))
                                                                @include('frest-components.inputs.buttons.modal-button', [ 'classes' => 'btn btn-warning mr-1 mb-1' , 'modal_id' => 'exampleModalCenter' , 'content' => 'اعتراض'  , 'icon' => saveIcon() ])
                                                            @endif
                                                        @endif
                                                        @include('frest-components.inputs.buttons.link-button',[ 'href' => route('user.question.index') , 'classes' => 'btn btn-danger mr-1 mb-1' , 'id' => 'cancel' , 'content' => __('global.cancel')  , 'icon' => arrowIcon() ])
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



@section('modals')

    <!-- Vertically Centered modal Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"> ثبت اعتراض </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                        <i class="bx bx-x"></i>
                    </button>
                </div>
                <div class="modal-body">


                    <form class="form" action="{{ route('user.protest.store' , [ 'question' => $question->id ]) }}" method="post">
                        @csrf

                        <div class="form-body">
                            <div class="row">

                                <div class="col-md-12 col-12 mb-2">
                                    @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'textarea-counter' , 'content' => 'متن اعتراض '] )
                                    @include('frest-components.tags.required-tag')
                                    @include('frest-components.inputs.textarea' , [ 'rows' => 5  , 'name' => 'text' , 'attributes' => 'required' ])
                                    @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'text'])
                                </div>


                                <div class="col-12 d-flex justify-content-end">
                                    @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-warning mr-1 mb-1' , 'id' => 'save_btn' , 'content' => 'ثبت اعتراض'  , 'icon' => saveIcon()  , 'attributes' => 'data-dismiss="modal"'])
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

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
