{{-- errors --}}
@if (!is_null(session('success')))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <small class="text-white">{{ session('success') }}</small>
    </div>
@endif


@if (!is_null(session('error')))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <small class="text-white">{{ session('error') }}</small>
    </div>
@endif


@if (!is_null(session('warning')))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <small class="text-white">{{ session('warning') }}</small>
    </div>
@endif


@if (!is_null(session('info')))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <small class="text-white">{{ session('info') }}</small>
    </div>
@endif
