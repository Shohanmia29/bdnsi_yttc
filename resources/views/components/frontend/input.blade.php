@props(['type' => 'text', 'name', 'label' => '', 'value' => null, 'required' => false, 'disabled' => false])

<div class="form-group {{ $attributes['class'] }}">
    <label for="{{ $name }}" class="form-label">
        {{ __(Str::of($label ?: $name)->replace(['_','-'], ' ')->title().'') }}
        @if($required)
            <span class="text-danger">*</span>
        @endif
    </label>

    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
           value="{{ $type === 'password' ? $value : old($name, $value) }}"
           class="form-control @error($name) is-invalid @enderror"
        {{ $disabled ? 'disabled' : '' }}
        {{ $required ? 'required' : '' }}
        {{ $attributes->filter(function ($value, $key) { return $key !== 'class'; }) }}
    />

    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
