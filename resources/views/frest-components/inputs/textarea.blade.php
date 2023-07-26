<fieldset class="form-label-group mb-0">
    <textarea class="form-control char-textarea @isset($classess) {{ $classess }} @endisset"

              @isset($id)
              id="{{ $id }}"
              @endisset

              @isset($name)
              name="{{ $name }}"
              @endisset

              @isset($wire)
              wire:model.defer="{{$wire}}"
              @endisset


              @isset($rows)
              rows="{{ $rows }}"
              @endisset

              @isset($placeholder)
              placeholder="{{ $placeholder }}"
                @endisset

    @isset($attributes)
        {{ $attributes }}
        @endisset

                >

         @isset($contents)
            {{ $contents }}
        @endisset

    </textarea>
</fieldset>
<small class="counter-value float-right bg-danger font-small-3">
    <span class="char-count">
        0
    </span>
    : تعداد کلمات
</small>
