<select class="select2 form-control"  @isset($name) name="{{ $name }}" @endisset>
    <option selected> -- انتخاب کنید  --  </option>

    @isset($data)
        @foreach($data as $key => $value)
            <option value="{{ $value }}">{{ $key }}</option>
        @endforeach
    @endisset

</select>
