<select class="select2 form-control "

    @isset($name)
        name="{{ $name }}"
    @endisset

    @isset($id)
        id="{{ $id }}"
    @endisset
    >

    <option></option>

    @isset($data)
        @foreach($data as $key => $value)
            <option value="{{ $value }}">{{ $key }}</option>
        @endforeach
    @endisset

</select>
