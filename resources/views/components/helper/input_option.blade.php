<div class="col-6 mb-2 d-flex">
    <select class="form-control" required name="{{ $name ?? '' }}">
        <option value="">Select an options</option>
        @if(isset($options))
            @foreach($options as $option)
                <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
            @endforeach
        @endif
    </select>
    @if(isset($removeBtn) && $removeBtn)
        <button class="ml-2 btn btn-outline-dark" onclick="removeInputOptions(this)">X</button>
    @endif
</div>

