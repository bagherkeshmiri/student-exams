@extends('admin.layouts.master')

@section('title',' لیست دانش آموزان')


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
                            <h5 class="content-header-title float-left pr-1 text-success " style=" border-left: 0 !important;"> لیست دانش آموزان</h5>
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
                                                    <th>نام</th>
                                                    <th>فامیل</th>
                                                    <th>نام کاربری</th>
                                                    <th>سطح</th>
                                                    <th>تاریخ ایجاد</th>
                                                    <th>عملیات</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($students as $student)
                                                    <tr>
                                                        <td>{{ $student->name }}</td>
                                                        <td>{{ $student->family }}</td>
                                                        <td>{{ $student->username }}</td>
                                                        <td>{{ $student->level }}</td>
                                                        <td>{{ $student->getJalaliCreatedAt() }}</td>
                                                        <td>
                                                            <a href="#">
                                                                <i class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
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

@endsection
