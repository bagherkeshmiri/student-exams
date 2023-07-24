<select class="form-control"

        @isset($name)
            name="{{ $name }}"
        @endisset

        @isset($wire)
            wire:model.defer="{{$wire}}"
        @endisset

        @isset($id)
            id="{{ $id }}"
        @endisset

        @isset($attributes)
            {{ $attributes }}
        @endisset

        required
>

    @isset($defaultOption)
        <option  @isset($defaultValue) value="0" @endisset> -- انتخاب کنید -- </option>
    @endisset

    @isset($data)
        @foreach($data as $key => $value)
            <option
                value="{{ $value }}"
            >
                {{ $key }}
            </option>
        @endforeach
    @endisset

</select>
