<div class="form-group mt-2">
    <label for="">{{ $title ?? 'input' }}:</label>
    <input type="{{ $type ?? 'text' }}" onkeyup={{$onkeyup ?? ''}} onchange="{{$onchange ?? ''}}" min="{{$min ?? ''}}" max="{{$max ?? ''}}" placeholder="{{ $title ?? 'input' }}" class="form-control mt-2" value="{{ $value ?? '' }}" id="{{ $id ?? '' }}" name="{{ $name ?? '' }}" {{ $required ?? '' }} {{ $disabled ?? '' }}>
    @error($name ?? '')
    <div class="alert alert-danger">{{ $message ?? '' }}</div>
    @enderror
</div>