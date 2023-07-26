@section('title','ایجاد سوال')


@section('styles')
    <style>
        textarea {
            resize: none;
        }
    </style>

@endsection


<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 text-success " style=" border-left: 0 !important;">ایجاد سوال</h5>
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


                                    <form class="form" wire:submit.prevent="store">
                                        <div class="form-body">
                                            <div class="row">

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'link' , 'content' => 'لینک '] )
                                                        @include('frest-components.tags.required-tag')
                                                        @include('frest-components.inputs.input',[ 'type' => 'text' , 'wire' => 'link' , 'classes' => 'text-left' , 'id' => 'link' , 'dir' => 'ltr' ,'value' => old('link'), 'icon' => linkIcon() , 'attributes' => 'required' ])
                                                        @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'link' ])
                                                    </div>
                                                </div>


                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700', 'for' => 'user_id' , 'content' => 'دانش آموز'] )
                                                        @include('frest-components.tags.required-tag')
                                                        @include('frest-components.inputs.simple-selectbox.simple-selectbox',[ 'data' => $students , 'id' => 'user_id' , 'wire' => 'user_id' ,'value' => old('user_id'), 'attributes' => 'required' ])
                                                        @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'user_id' ])
                                                    </div>
                                                </div>


                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'admin_id' , 'content' => ' تصحیح کننده'] )
                                                        @include('frest-components.tags.required-tag')
                                                        @include('frest-components.inputs.simple-selectbox.simple-selectbox',[ 'data' => $admins , 'id' => 'admin_id' , 'wire' => 'admin_id' , 'value' => old('admin_id'), 'attributes' => 'required'  ])
                                                        @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'admin_id' ])
                                                    </div>
                                                </div>


                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'response_deadline' , 'content' => 'مهلت پاسخ گویی (دقیقه)'] )
                                                        @include('frest-components.tags.required-tag')
                                                        @include('frest-components.inputs.input',[ 'type' => 'number' , 'wire' => 'response_deadline' , 'value' => old('response_deadline'), 'classes' => 'text-left' , 'id' => 'response_deadline' , 'dir' => 'ltr' , 'icon' => timerIcon() , 'attributes' => 'required' ])
                                                        @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'response_deadline' ])
                                                    </div>
                                                </div>


                                                <div class="col-md-12 col-12 mb-2">
                                                    @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'textarea-counter' , 'content' => 'متن '] )
                                                    @include('frest-components.tags.required-tag')
                                                    @include('frest-components.inputs.textarea' , [ 'rows' => 10  , 'wire' => 'text' ,'contents' => old('text'), 'attributes' => 'required' ])
                                                    @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'text' ])
                                                </div>


                                                <div class="col-12 d-flex justify-content-end mt-3">
                                                    @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-primary mr-1 mb-1' , 'id' => 'save_btn' , 'content' => __('global.save')  , 'icon' => saveIcon() ])
                                                    @include('frest-components.inputs.buttons.link-button',[ 'href' => route('admin.panel.question.index') , 'classes' => 'btn btn-danger mr-1 mb-1' , 'id' => 'cancel' , 'content' => __('global.cancel')  , 'icon' => arrowIcon() ])
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


@section('scripts')
@endsection
