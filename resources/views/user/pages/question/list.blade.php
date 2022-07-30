@extends('user.layouts.master')

@section('title',' لیست سوالات من')


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
                            <h5 class="content-header-title float-left pr-1 text-success " style=" border-left: 0 !important;"> لیست سوالات من </h5>
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
                                                    <th>لینک</th>
                                                    <th>مدت پاسخ (دقیقه)</th>
                                                    <th>وضعیت</th>
                                                    <th>تاریخ ایجاد</th>
                                                    <th> تاریخ پاسخ</th>
                                                    <th> تاریخ بازبینی</th>
                                                    <th> تاریخ تایید</th>
                                                    <th> تاریخ اعتراض</th>
                                                    <th>عملیات</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @forelse ($questions as $question)
                                                    <tr>
                                                        <td>{{ $question->link }}</td>
                                                        <td>{{ $question->response_deadline }}</td>
                                                        <td>{!! $question->getBadgeStatus() !!} </td>
                                                        <td>{{ $question->getJalaliCreatedAt() }}</td>
                                                        <td>{{ $question->getJalaliResponseTime() }}</td>
                                                        <td>{{ $question->getJalaliReviewTime() }}</td>
                                                        <td>{{ $question->getJalaliConfirmationTime() }}</td>
                                                        <td>{{ $question->getJalaliProtestTime() }}</td>
                                                        <td>
                                                            @include('frest-components.inputs.buttons.tiny.link.icon-btn',[  'href' => route('user.question.show',[ 'question' => $question->id ])  , 'tooltip_title' => 'پاسخ' , 'icon' => '<i class="bx bx-pencil bx-sm bx-tada-hover" style="color:#FDAC41 !important;"></i>'])
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="100" class="text-center"> هیچ اطلاعاتی یافت نشد</td>
                                                    </tr>
                                                @endforelse

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
