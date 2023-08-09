<fieldset>
    <div class="checkbox checkbox-sm checkbox-success checkbox-glow @isset($main_classes)  {{$main_classes}}  @endisset">
        <input type="checkbox"

               @isset($wire)
               wire:model.defer="{{$wire}}"
               @endisset

               @isset($wireSimple)
               wire:model="{{$wireSimple}}"
               @endisset

               @isset($name)
               name = "{{ $name }}"
               @endisset

               @isset($value)
               value = "{{ $value }}"
               @endisset

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
