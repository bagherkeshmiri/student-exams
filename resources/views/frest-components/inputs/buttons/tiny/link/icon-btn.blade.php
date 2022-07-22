<a
    class="mr-1 mb-1 @isset($classes)  {{ $classes }} @endisset"

    @isset($id)
        id="{{ $id }}"
    @endisset

    @isset($href)
        href="{{ $href }}"
    @endisset

    data-toggle="tooltip"
    data-placement="top"

    @isset($tooltip_title)
    title="" data-original-title="{{ $tooltip_title }}"
    @endisset

    @isset($attributes)
        {{ $attributes }}
    @endisset
   >
    {!! $icon !!}

</a>
