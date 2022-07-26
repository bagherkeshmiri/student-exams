<div
    class="badge badge-info mr-1 mb-1 @isset($classes) {{ $classes }} @endisset"

    @isset($id)
        id="{{ $id }}"
    @endisset
>
    {{ $content }}
</div>
