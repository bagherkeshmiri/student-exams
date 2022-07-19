
<label
    @isset($classes)
        class="@foreach($classes as $class) {{ $class }} @endforeach"
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
