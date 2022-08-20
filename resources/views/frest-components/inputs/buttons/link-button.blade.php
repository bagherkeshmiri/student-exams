
<a
        @isset($href)
            href="{{$href}}"
        @endisset

        @isset($classes)
            class="{{$classes}}"
        @endisset

        @isset($id)
            id="{{ $id }}"
        @endisset
>
    {{ $content }}

    @isset($icon)
        {!! $icon  !!}
    @endisset

</a>
