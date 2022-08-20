<div
    class="checkbox @isset($main_classes)  {{$main_classes}}  @endisset">
    <input type="checkbox"

           name = "{{ $name }}"

           value = "{{ $value }}"

            @isset($id)
                id="{{ $id }}"
            @endisset
           class="form-check-input @isset($input_classes) {{$input_classes}}  @endisset"

            @isset($attributes)
                {{ $attributes }}
            @endisset

    >
    <label
        class="checkboxsmall @isset($label_classes) {{$label_classes}}  @endisset"

        @isset($for)
            for="{{ $for }}"
        @endisset
    >
        <small> {{ $label_content }} </small>
    </label>
</div>
