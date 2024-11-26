@props(['name', 'label' => '', 'required' => false, 'disabled' => false])

<div class="form-group {{ $attributes['class'] }}">
    <label for="{{ $name }}" class="form-label">
        {{ __(Str::of($label ?: $name)->replace(['_','-'], ' ')->title().'') }}
        @if($required)
            <span class="text-danger">*</span>
        @endif
    </label>

    <select id="{{ $name }}" name="{{ $name }}"
            class="form-control @error($name) is-invalid @enderror"
        {{ $disabled ? 'disabled' : '' }}
        {{ $required ? 'required' : '' }}
        {{ $attributes->filter(fn ($value, $key) => $key !== 'class') }}>
        {!! $slot !!}
    </select>

    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
