<div class="form-group mt-3">
    <label for="">{{ $title ?? 'input' }}:</label> <br><br>
    <textarea name="{{ $name ?? '' }}" id="" cols="{{ $cols ?? '10' }}" rows="{{ $rows ?? '5' }}" style="min-height: {{ $height ?? '150px' }} !important;" class="form-control mt-2 {{ $class ?? 'editor' }}">{{ $value ?? '' }}</textarea>
    @error($name ?? '')
    <div class="alert alert-danger">{{ $message ?? '' }}</div>
    @enderror
</div>