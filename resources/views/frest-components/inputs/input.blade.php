
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

           class="form-control @isset($classes)  {{$classes}} @endisset"

           @isset($placeholder)
                placeholder="{{ $placeholder }}"
           @endisset

            @isset($value)
                value="{{ $value }}"
            @endisset

            @isset($attributes)
                    {{$attributes}}
            @endisset

            @isset($options)
                     {{ $options }}
            @endisset

    >
    <div class="form-control-position">
            {!! $icon !!}
    </div>
</div>





