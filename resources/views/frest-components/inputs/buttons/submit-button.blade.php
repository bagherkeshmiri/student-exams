
<button type="submit"
        @isset($classes)
        class="{{$classes}}"
        @endisset

        @isset($id)
            id="{{ $id }}"
        @endisset

        @isset($attributes)
            {{ $attributes }}
        @endisset

>
    {{ $content }}

    @isset($icon)
        {!! $icon  !!}
    @endisset

</button>
