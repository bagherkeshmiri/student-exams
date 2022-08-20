@extends('admin.layouts.master')

@section('title',' لیست نقش ها')


@section('styles')
    <link rel="stylesheet" type="text/css" href=" {{ asset('/frest/vendors/css/extensions/sweetalert2.min.css') }}">
@endsection



@section('contents')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 text-success " style=" border-left: 0 !important;"> لیست نقش ها </h5>
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

                                        <!-- Table with no outer spacing -->
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-hover">
                                                <thead>
                                                <tr>
                                                    <th style="width: 120px;">نام</th>
                                                    <th>سطوح دسترسی</th>
                                                    <th>عملیات</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @forelse ($roles as $role)
                                                    <tr>
                                                        <td >{{ $role->name }}</td>
                                                        <td>
                                                            @foreach($role->permissions as $permission )
                                                                @include('frest-components.badges.danger-badge' , [ 'content' => $permission->fa_name ])
                                                            @endforeach
                                                        </td>
                                                       <td>
                                                            @include('frest-components.inputs.buttons.tiny.link.icon-btn',[  'href' => route('admin.role.show',[ 'role' => $role->id ])  , 'tooltip_title' => 'ویرایش' , 'icon' => '<i class="bx bx-pencil bx-sm bx-tada-hover" style="color:#FDAC41 !important;"></i>'])
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="100" class="text-center"> هیچ اطلاعاتی یافت نشد</td>
                                                    </tr>
                                                @endforelse

                                                </tbody>
                                            </table>

                                            @include('frest-components.paginators.bootstrap',['model' => $roles])

                                        </div>

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
    <script type="text/javascript" src="{{ asset('frest/js/scripts/extensions/sweet-alerts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frest/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/swal-functions.js') }}"></script>
    <script type="text/javascript">

        function student_delete(element,event) {
            event.preventDefault()
            mboxDelete(element.getAttribute('data-url'));
        }

    </script>

@endsection
