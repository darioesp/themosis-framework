<label {!! $__field->attributes($__field->getOptions('label_attr')) !!}>{!! $__field->getOptions('label') !!}</label>
<input type="password" name="{{ $__field->getName() }}" {!! $__field->attributes($__field->getAttributes()) !!} value="{{ $__field->getValue() }}">
@include($__field->getTheme().'.types.includes.info', ['field' => $__field])
@include($__field->getTheme().'.types.includes.errors', ['field' => $__field])