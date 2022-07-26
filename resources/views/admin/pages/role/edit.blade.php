@extends('admin.layouts.master')

@section('title','ویرایش نقش')


@section('styles')


@endsection



@section('contents')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 text-success " style=" border-left: 0 !important;">ویرایش نقش</h5>
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

                                        <form class="form" action="{{ route('admin.role.update' ,[ 'role' => $role->id ]) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="form-body">
                                                <div class="row">

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.label',[ 'classes' => 'text-bold-700' , 'for' => 'name' , 'content' => 'نام نقش '] )
                                                            @include('frest-components.tags.required-tag')
                                                            @include('frest-components.inputs.input',[ 'type' => 'text' , 'name' => 'name' , 'value' => $role->name , 'classes' => 'text-left' , 'id' => 'name' , 'dir' => 'ltr' , 'icon' => lockIcon() , 'attributes' => 'required' ])
                                                            @include('frest-components.form-valiations.small-tag-error',[ 'name' => 'name' ])
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12 align-self-end">
                                                        <div class="form-group">
                                                            @include('frest-components.inputs.checkboxs.warning-sm-checkbox',[ 'label_content' => 'انتخاب همه'  , 'id' => 'selectAll' , 'for' => 'selectAll'  , 'name' => '' , 'value' => '' , 'attributes' => 'onclick=selectAllPermissions()' ])
                                                        </div>
                                                    </div>

                                                    @include('frest-components.dividers.warning-divider',['title' => 'سطوح دسترسی'])


                                                    @error('permissions[]')
                                                        <div class="col-md-12 col-12 text-center mb-2">
                                                            @include('frest-components.form-valiations.small-tag-error',['name' => 'permissions[]'])
                                                        </div>
                                                    @enderror


                                                    @foreach($permissions as $permission)
                                                        <div class="col-md-3 col-12">
                                                            <div class="form-group">
                                                                @include('frest-components.inputs.checkboxs.warning-sm-checkbox',[ 'label_content' => $permission->fa_name  , 'id' => 'permission'.$permission->id , 'for' => 'permission'.$permission->id  , 'name' => 'permissions[]' , 'value' => $permission->id ,'attributes' => (in_array($permission->id,$admin_permissions)) ? 'checked' : ''  ])
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    <div class="col-12 d-flex justify-content-end mt-2">
                                                        @include('frest-components.inputs.buttons.submit-button', [ 'classes' => 'btn btn-primary mr-1 mb-1' , 'id' => 'save_btn' , 'content' => __('global.edit')  , 'icon' => saveIcon() ])
                                                        @include('frest-components.inputs.buttons.link-button',[ 'href' => route('admin.role.index') , 'classes' => 'btn btn-danger mr-1 mb-1' , 'id' => 'cancel' , 'content' => __('global.cancel')  , 'icon' => arrowIcon() ])
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

    <script>

        const selectAllPermissions = () => {
            try {
                let permissions = document.querySelectorAll('[name="permissions[]"]');
                permissions.forEach( (item) => {
                        item.checked = item.checked !== true;
                    }
                );
            } catch (e) {
                console.log(e)
            }
        }

    </script>

@endsection
