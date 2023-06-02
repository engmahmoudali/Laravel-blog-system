@extends('layouts.app')

@section('title', 'Add new post')
    
@section('content')
<x-form.page :title="'Add new post'" :url="route('posts.store')" >
    <div class="row">
        <div class="col-md-6">
            <x-form.group :title="'Title'" :name="'title'" :id="'title'" :onkeyup="'convert(this.value)'"/>
        </div>
        <div class="col-md-6">
            <x-form.group :title="'Slug'" :name="'slug'" :disabled="'disabled'" :id="'slug'" />
        </div>
        <div class="col-sm-12">
            <x-form.txtarea :title="'Content'" :name="'content'"></x-form.txtarea>
        </div>
        <div class="col-md-12 mt-4">
            <img src="{{ asset('default.png') }}" alt="image" width="250px" id="img">
            <input type="file" class="form-control mt-2" accept="image/*" name="photo" onchange="previewImage(this)" />
            @error('photo')
            <div class="alert alert-danger">{{ $message ?? '' }}</div>
            @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <x-form.submit :title="'Add New Post'" :reset="'Reset Inputes'"/>
    </div>
</x-form.page>
@endsection

@push('scripts')
    <script>
        function convert(value){
            document.getElementById('slug').value = convertToSlug(value);
        }
    </script>
@endpush