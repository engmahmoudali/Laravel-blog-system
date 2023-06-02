<div class="form-group">
    <label for="">{{ $title ?? 'select' }}:</label>
    <select name="{{ $name ?? '' }}" class="form-control form-select">
        <option value="">{{ __('اختر من القائمه') }}</option>
        {!! $slot !!}
    </select>
     @error($name ?? '')
    <div class="alert alert-danger">{{ $message ?? '' }}</div>
    @enderror
</div>