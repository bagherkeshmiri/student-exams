<button class="btn btn-icon btn-warning mr-1 mb-1 @isset($classes)  {{ $classes }} @endisset" wire:click="$refresh" data-toggle="tooltip"
        data-placement="top"

        @isset($tooltip_title)
        title="" data-original-title="{{ $tooltip_title }}"
        @endisset

        wire:loading.attr="disabled">

    <i class="bx bx-revision"></i>
</button>

<div wire:loading.delay.shorter class="text-warning">
    درحال دریافت اطلاعات ...
</div>
