@if(isset($options))
    @foreach($options as $option)
        <div class="form-check">
            <input class="form-check-input"
                   type="radio"
                   required
                   name="{{ $name ?? '' }}"
                   id="{{ $name && $option['id'] ? $name.'-'.$option['id'] : '' }}"
                   value="{{ $option['id'] }}">
            <label class="form-check-label" for="{{ $name && $option['id'] ? $name.'-'.$option['id'] : '' }}">
                {{ $option['name'] ?? '' }}
            </label>
        </div>
    @endforeach
@endif
