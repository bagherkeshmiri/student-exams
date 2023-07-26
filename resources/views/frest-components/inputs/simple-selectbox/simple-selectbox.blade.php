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
    @isset($data)
        <option>-- انتخاب کنید --</option>
        @foreach($data as $key => $value)
            <option
                value="{{ $value }}"
                @isset($defualtValue)
                @if($value == $defualtValue) selected @endif
                @endisset
            >
                {{ $key }}
            </option>
        @endforeach
    @endisset

</select>
