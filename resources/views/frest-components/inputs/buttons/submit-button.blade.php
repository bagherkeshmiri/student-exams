
<button type="submit"
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

</button>
