@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
<x-page-table :title="'All Posts'" :addRoute="route('posts.create')">
    @livewire('posts-table')
</x-page-table>
@endsection