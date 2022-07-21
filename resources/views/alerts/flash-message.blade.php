{{-- errors --}}
@if (!is_null(session('success')))
    <div class="alert bg-rgba-success alert-dismissible mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="بستن">
            <span aria-hidden="true">×</span>
        </button>
        <div class="d-flex align-items-center">
            <i class="bx bx-like"></i>
            <span>
                {{ session('success') }}
            </span>
        </div>
    </div>
@endif


@if (!is_null(session('error')))

    <div class="alert bg-rgba-danger alert-dismissible mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="بستن">
            <span aria-hidden="true">×</span>
        </button>
        <div class="d-flex align-items-center">
            <i class="bx bx-error"></i>
            <span>
                  {{ session('error') }}
            </span>
        </div>
    </div>

@endif


@if (!is_null(session('warning')))

    <div class="alert bg-rgba-warning alert-dismissible mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="بستن">
            <span aria-hidden="true">×</span>
        </button>
        <div class="d-flex align-items-center">
            <i class="bx bx-error-circle"></i>
            <span>
                  {{ session('warning') }}
            </span>
        </div>
    </div>

@endif


@if (!is_null(session('info')))
    <div class="alert bg-rgba-info alert-dismissible mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="بستن">
            <span aria-hidden="true">×</span>
        </button>
        <div class="d-flex align-items-center">
            <i class="bx bx-heart"></i>
            <span>
                  {{ session('info') }}
            </span>
        </div>
    </div>
@endif
