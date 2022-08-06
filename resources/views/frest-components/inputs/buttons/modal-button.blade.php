
<button type="button"

        @isset($classes)
            class="{{$classes}}"
        @endisset

        data-toggle="modal"

        data-target="#{{$modal_id}}"

        data-dismiss="modal"

        @isset($id)
            id="{{ $id }}"
        @endisset
>
    {{ $content }}

    @isset($icon)
        {!! $icon  !!}
    @endisset

</button>

