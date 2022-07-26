<fieldset>
    <div class="checkbox checkbox-sm checkbox-info checkbox-glow @isset($main_classes)  {{$main_classes}}  @endisset">
        <input type="checkbox"

               name = "{{ $name }}"

               value = "{{ $value }}"

                id="{{ $id }}"

                @isset($input_classes)
                    class="{{$input_classes}}"
                @endisset

                @isset($attributes)
                    {{ $attributes }}
                @endisset

        >
        <label @isset($label_classes) {{$label_classes}}  @endisset

                for="{{ $for }}"
        >
            {{ $label_content }}
        </label>
    </div>
</fieldset>
