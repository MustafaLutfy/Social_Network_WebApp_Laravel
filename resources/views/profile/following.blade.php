@extends('layouts.app')

@section('content')

<!-- This is an example component -->
<div class="container w-1/3 mt-20 mx-auto">

	<div class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Following</h3>

   </div>
   <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach ($users as $user)
            <li class="py-3 sm:py-4">
                <div class="flex items-center" >
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/users_images/{{$user->image_path}}" alt="Neil image">
                    </div>
                    <div class="flex flex-col ml-4 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate">
                            {{$user->name}}
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            {{'@'.$user->name}}
                        </p>
                    </div>
                    <button style="margin-left:auto" class="bg-blue-600  text-gray-100 px-6 py-1 rounded-md hover:bg-blue-700 cursor-pointer"><a href="/profile/{{$user->id}}/follow"></a>Follow</button> 
                </div>
            </li>
            @endforeach
            
        </ul>
   </div>


  {{-- @foreach ()

  @endforeach --}}
 
 

@endsection