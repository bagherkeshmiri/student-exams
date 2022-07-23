
<label
    @isset($classes)
        class="@isset($classes)  {{$classes}} @endisset"
    @endisset

    @isset($id)
    id="{{ $id }}"
    @endisset


    @isset($for)
    for="{{ $for }}"
    @endisset
>

    {{ $content }}
</label>
