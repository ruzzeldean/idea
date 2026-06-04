@props(['name'])

@error($name)
  <p class="error">{{ $message }}</p>
@enderror
