
<div class="position-relative has-icon-left">
    <input
            @isset($type)
                type="{{ $type }}"
            @endisset

            @isset($name)
                name="{{ $name }}"
            @endisset

            @isset($id)
                id="{{ $id }}"
            @endisset

           class="form-control @isset($classes) @foreach($classes as $class) {{$class}} @endforeach @endisset"

           @isset($placeholder)
                placeholder="{{ $placeholder }}"
           @endisset

            @isset($value)
                value="{{ $value }}"
            @endisset

            @isset($attributes)
                @foreach($attributes as $attribute)
                    {{$attribute}}
                @endforeach
            @endisset

            @isset($options)
                @foreach($options as $key => $value)
                     {{$key}} = '{{ $value }}'
                @endforeach
            @endisset

    >
    <div class="form-control-position">
            {!! $icon !!}
    </div>
</div>





