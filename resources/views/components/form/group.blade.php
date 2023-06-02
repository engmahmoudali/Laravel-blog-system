<div class="form-group mt-2">
    <label for="">{{ $title ?? 'input' }}:</label>
    <input type="{{ $type ?? 'text' }}" onkeyup={{$onkeyup ?? ''}} onchange="{{$onchange ?? ''}}" min="{{$min ?? ''}}" max="{{$max ?? ''}}" placeholder="{{ $title ?? 'input' }}" class="form-control mt-2  @error($name ?? '') is-invalid @enderror" value="{{ $value ?? '' }}" id="{{ $id ?? '' }}" name="{{ $name ?? '' }}" {{ $required ?? '' }} {{ $disabled ?? '' }}>
    @error($name ?? '')
    <div class="text text-danger">{{ $message ?? '' }}</div>
    @enderror
</div>