{{-- errors --}}
@if (!is_null(session('success')))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ session('success') }}</strong>
    </div>
@endif


@if (!is_null(session('error')))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ session('error') }}</strong>
    </div>
@endif


@if (!is_null(session('warning')))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ session('warning') }}</strong>
    </div>
@endif


@if (!is_null(session('info')))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ session('info') }}</strong>
    </div>
@endif
