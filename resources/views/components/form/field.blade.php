@props(['label' => false, 'name', 'type' => 'text', 'value' => ''])

<div class="space-y-2">
  @if ($label)
    <label for="{{ $name }}" class="label">{{ $label }}</label>
  @endif

  @if ($type === 'textarea')
    <textarea name="{{ $name }}" id="{{ $name }}" class="textarea" {{ $attributes }}>{{ old($name, $value) }}</textarea>
  @else
    <input type="{{ $type }}" class="input" name="{{ $name }}" id="{{ $name }}"
      value="{{ old($name, $value) }}" {{ $attributes }}>
  @endif

  <x-form.error name="{{ $name }}" />
</div>
