<fieldset>
    <div class="checkbox checkbox-sm checkbox-success checkbox-glow @isset($main_classes)  {{$main_classes}}  @endisset">
        <input type="checkbox"

               name = "{{ $name }}"

               value = "{{ $value }}"

                id="{{ $id }}"

                @isset($input_classes)
                    class="  {{$input_classes}}"
                @endisset
        >
        <label @isset($label_classes) {{$label_classes}}  @endisset

                for="{{ $for }}"

                @isset($attributes)
                    {{ $attributes }}
                @endisset
        >
            {{ $label_content }}
        </label>
    </div>
</fieldset>
