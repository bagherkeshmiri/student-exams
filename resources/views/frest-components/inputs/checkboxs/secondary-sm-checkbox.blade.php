<fieldset>
    <div class="checkbox checkbox-sm checkbox-secondary checkbox-glow @isset($main_classes)  {{$main_classes}}  @endisset">
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
        >
            {{ $label_content }}
        </label>
    </div>
</fieldset>
