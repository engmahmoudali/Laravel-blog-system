@extends('layouts.main')
    
@section('content')
<h1 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white" style="font-size: 3.00rem !important">{{ config('app.name', 'Laravel') }}</h1>
<div class="mt-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
      @foreach ($posts as $post)
          <x-show.post-card :url="route('post', $post->slug)" :title="$post->title" :content="$post->content" :image="$post->image"/>
      @endforeach
      

    </div>
</div>
<div class="pagination-wrapper mt-6">
    {{ $posts->links() }}
  </div>
@endsection