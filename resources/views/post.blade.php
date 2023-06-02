@extends('layouts.main')

@section('title', $post->title)

@section('content')
    <x-show.page :title="$post->title" :class="'w-80'">
        <img src="{{ asset($post->image) }}" alt="image" class="image mt-2" width="780px" height="460px">
        <h2 class="mt-4">{!! $post->content !!}</h2>
        <h4 class="mt-4 text-danger">Author: {{ $post->author }}</h4>
        @auth
            <div class="mt-2">
                <a href="{{ route('posts.edit', $post->slug) }}" class="btn btn-warning">Edit This Post</a>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Manage All Posts</a>
            </div>
        @endauth
    </x-show.page>
    @livewire('comments',['postId' => $post->uuid])
@endsection