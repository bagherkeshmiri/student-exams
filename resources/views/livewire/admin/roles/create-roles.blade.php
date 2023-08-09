@section('title','ایجاد نقش')

@section('styles')
@endsection



<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 text-success " style=" border-left: 0 !important;">ایجاد نقش</h5>
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

                                    <form class="form" wire:submit.prevent="store">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">

                                                <div class="col-md-5 col-12">
                                                    <div class="form-group">
                                                        @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'fa_name' , 'content' => 'نام فارسی نقش '] )
                                                        @include('frest-components.tags.required-tag')
                                                        @include('frest-components.inputs.input',[ 'type' => 'text' , 'wire' => 'fa_name' , 'classes' => 'text-left' , 'id' => 'fa_name' , 'dir' => 'ltr' , 'icon' => lockIcon() , 'attributes' => 'required' ])
                                                        @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'fa_name' ])
                                                    </div>
                                                </div>

                                                <div class="col-md-5 col-12">
                                                    <div class="form-group">
                                                        @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'en_name' , 'content' => 'نام انگلیسی نقش '] )
                                                        @include('frest-components.tags.required-tag')
                                                        @include('frest-components.inputs.input',[ 'type' => 'text' , 'wire' => 'en_name' , 'classes' => 'text-left' , 'id' => 'en_name' , 'dir' => 'ltr' , 'icon' => lockIcon() , 'attributes' => 'required' ])
                                                        @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'en_name' ])
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-12 align-self-end">
                                                    <div class="form-group">
                                                        @include('frest-components.inputs.checkboxs.success-sm-checkbox',[ 'label_content' => 'انتخاب همه'  , 'id' => 'selectAll' , 'for' => 'selectAll'  ,'wireSimple' => 'selectAll' , 'attributes' => 'onclick=selectAllPermissions()' ])
                                                    </div>
                                                </div>

                                                @include('frest-components.dividers.success-divider',['title' => 'سطوح دسترسی'])

                                                @error('permissions[]')
                                                <div class="col-md-12 col-12 text-center mb-2">
                                                    @include('frest-components.form-valiations.small-tag-error',['name' => 'permissions[]'])
                                                </div>
                                                @enderror

                                                @foreach($allPermissions as $permission)
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.checkboxs.success-sm-checkbox',[ 'label_content' => $permission->fa_name  , 'id' => 'permission'.$permission->id , 'for' => 'permission'.$permission->id  , 'wire' => 'permissions' , 'value' => $permission->id ])
                                                        </div>
                                                    </div>
                                                @endforeach

                                                <div class="col-12 d-flex justify-content-end mt-2">
                                                    @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-primary mr-1 mb-1' , 'id' => 'save_btn' , 'content' => __('global.save')  , 'icon' => saveIcon() ])
                                                    @include('frest-components.inputs.buttons.link-button',[ 'href' => route('admin.panel.role.index') , 'classes' => 'btn btn-danger mr-1 mb-1' , 'id' => 'cancel' , 'content' => __('global.cancel')  , 'icon' => arrowIcon() ])
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
