@extends('layouts.app')

@section('content')

    @if (session()->has('message'))
    <div class="container mx-auto mt-10 bg-green-100 border border-green-400 text-green-700 px-4 py-4 rounded relative" role="alert">
        <strong class="font-bold">Nice: </strong>
        <span class="block sm:inline">{{session()->get('message')}}</span>
    </div>
    @endif

    

    <div class="container flex items-center mx-auto py-20 px-10 bg-gray-200">
        <img src="/users_images/{{$user->image_path}}" style="width: 100px; height: 100px; border-radius:50%" alt="">
        <h1 class="font-bold text-gray-600 px-6 text-2xl">{{$user->name}}</h1>
        @if (Auth::check() && $user->id === Auth::user()->id)
        
            <a class="bg-transparent text-gray-600 font-bold py-4 px-5 mr-6 rounded-md text-3xl hover:text-gray-700 transition 0.3s" href="/profile/{{$user->id}}/edit"><i class="fas fa-edit"></i></a>
        @endif  
{{-- 
        @if(Auth::user()->id == $user->id)
             <button class="bg-gray-600 text-gray-100 px-6 py-4 rounded-md hover:bg-gray-700 cursor-pointer">Your Profile</button>
        @else --}}

            @if ($state == 'follow')
            <form action="/profile/{{$user->id}}/follow" method="POST">
                @csrf
            <button class="bg-gray-600 text-gray-100 px-6 py-4 rounded-md hover:bg-gray-700 cursor-pointer">{{$state}}</button>
            </form>
            @else
            <form action="/profile/{{$user->id}}/unfollow" method="POST">
                @csrf
                <button class="bg-blue-600 text-gray-100 px-6 py-4 rounded-md hover:bg-gray-700 cursor-pointer">{{$state}}</button> 
            </form>
            @endif
            
        {{-- @endif --}}


            
        
    
        <h2 class="ml-6 font-bold text-blue-400 text-xl">followers: {{$followers}}</h2> 
        <a href="/profile/{{$user->id}}/following"><h2 class="ml-6 font-bold text-blue-400 text-xl">following: {{$following}}</h2></a>
        
    </div>

    <div class="container m-auto text-center pt-10 pb-6">
        <h1 class="text-5xl font-bold">{{$user->name}}'s Posts</h1> 
    </div>
    
    {{-- @if (Auth::check())

    <div class="post-b container sm:grid grid-cols-2 gap-10 mx-auto py-5 px-5">
       
        <a class=" bg-green-600 text-gray-100 font-bold py-4 px-5 place-self-start rounded-md text-l hover:bg-green-700 transition 0.3s" href="/blog/create">Add Post</a>

    </div>
        
    @else
        <div class="container mx-auto flex">
            <h4 class="text-gray-600 text-center text-l border-dashed border-2 border-gray-300 p-6 mt-10 mx-auto rounded-lg">Sign in to publish posts!</h4>
        </div>

    @endif
     --}}

  @foreach ($posts as $post)
    <div class="post-b container sm:grid grid-cols-2 gap-10 mx-auto py-20 px-5">
        <div class="flex">
            <img class="object-cover" src="/images/{{$post->image_path}}" alt="">
        </div>

        <div class="flex flex-col justify-center">
            <h2 class="text-gray-700 font-bold text-4xl py-5">{{$post->title}}</h2>
            <div>
                By:<span class="text-gray-500 italic "> {{$post->user->name}}</span> 
                Posted at:<span class="text-gray-500 italic "> {{Date('m-d-Y',strtotime($post->updated_at))}} </span> 
            <p class="text-l text-gray-700 py-10 leading-6">{{$post->description}}</p>
            

            
            <a class="bg-gray-600 text-gray-100 font-bold py-4 px-5 place-self-start rounded-md text-l hover:bg-gray-700 transition 0.3s" href="/blog/{{$post->slug}}">Read More</a>

            </div>
        
        </div>

    </div>
  @endforeach
 
 

@endsection