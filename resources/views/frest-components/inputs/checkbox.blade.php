

<div class="checkbox @isset($main_classes) @foreach($main_classes as $main_class) {{$main_class}} @endforeach @endisset">
    <input type="checkbox" id="{{ $id  }}" class="form-check-input @isset($input_classes) @foreach($input_classes as $input_class) {{$input_class}} @endforeach @endisset" >
    <label class="checkboxsmall @isset($label_classes) @foreach($label_classes as $label_class) {{$label_class}} @endforeach @endisset" for="{{ $for }}"><small> {{ $label_content }} </small></label>
</div>
