
<button type="button"
    @isset($classes)
        class="{{$classes}}"
    @endisset

    @isset($id)
        id="{{ $id }}"
    @endisset

    @isset($events)
        {{ $events }}
    @endisset
>
    {{ $content }}

    @isset($icon)
        {!! $icon  !!}
    @endisset

</button>
