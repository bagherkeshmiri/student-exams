<div
    class="checkbox @isset($main_classes)  {{$main_classes}}  @endisset">
    <input type="checkbox" id="{{ $id  }}"
           class="form-check-input @isset($input_classes) {{$input_classes}}  @endisset">
    <label
        class="checkboxsmall @isset($label_classes) {{$label_classes}}  @endisset"
        for="{{ $for }}">
        <small> {{ $label_content }} </small>
    </label>
</div>
