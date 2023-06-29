@extends('layouts.app')

@section('content')
  <div class="grid grid-cols-4 p-10 gap-8">
    @if($posts)
    @foreach ($posts as $post)
    <div class="max-w-sm rounded-lg pb-4 overflow-hidden shadow-lg">
      <img class="w-full h-56" src="/images/{{$post->image_path}}" alt="Sunset in the mountains">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{$post->title}}</div>
        <p class="text-gray-700 text-base">
          {{substr($post->description, 0, 110)}}...
        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <a class="text-blue-400 hover:text-blue-500 cursor-pointer" href="/blog/{{$post->slug}}">Details</a>
      </div>
    </div>
@endforeach
    @endif
  
</div>  
@endsection