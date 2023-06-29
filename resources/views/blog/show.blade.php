@extends('layouts.app')

@section('content')
<head>
    <style type="text/css">
        
    </style>
</head>

    @if (session()->has('message'))
    <div class="container mx-auto mt-10 bg-green-100 border border-green-400 text-green-700 px-4 py-4 rounded relative" role="alert">
        <strong class="font-bold">Note: </strong>
        <span class="block sm:inline">{{session()->get('message')}}</span>
      </div>
    @endif

    
   <div>
    <div class=" 2xl:grid-container 2xl:grid 2xl:grid-cols-8 rounded-lg lg:px-60 mt-20 ">
    <div class="flex flex-col col-span-5 lg:mr-20" >
        <div class="flex flex-col pb-3">
          

            {{-- @if (Auth::check() && Auth::user()->id === $post->user_id)
            <div class="flex gap-2">
                <a class="bg-transparent text-gray-500 font-bold py-4 px-5 place-self-start rounded-md text-3xl hover:text-gray-600 transition 0.3s" href="/blog/{{$post->slug}}/edit"><i class="fas fa-edit"></i></a>
                <form action="/blog/{{$post->slug}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="bg-transparent text-gray-500 font-bold py-4 px-5 place-self-start rounded-md text-3xl hover:text-gray-600 transition 0.3s" ><i class="fas fa-trash"></i>
                    </button>    
                </form>
            </div>
            
            @endif --}}

            
        </div>
            <div class="">
                <div class="flex justify-between mb-6">
                    <h1 class="text-gray-700 text-3xl md:text-4xl uppercase font-bold  ">{{$post->title}}</h1>

                        <div>
                        <span class=" text-gray-500 mt-4 text-lg"><i class="far fa-clock mr-2"></i>{{Date('m-d-Y',strtotime($post->updated_at))}}</span>
                        </div>
                    </div>
            

                    <img class="mx-auto mb-6 w-full rounded-2xl object-cover" src="/images/{{$post->image_path}}" alt="">

                    <div class="flex items-center mb-6">
                        <i class="fas fa-user text-gray-500 text-2xl"></i>
                        <span class="ml-4 text-gray-500 font-bold text-xl">{{$post->user->name}}</span> 
                    </div>

                    <p class="text-gray-600 text-xl leading-10">{{$post->description}}</p>

              </div>
            </div>
            <div class="col-span-3 2xl:block hidden md:ml-20 lg:ml-40">
                <div class="mt-20 mb-28">
                    <h2 class="font-semibold text-gray-400 text-xl mb-2">Categories</h2>
                    <p class="text-gray-600 font-semibold text-lg mb-2">All Articals</p>
                    <p class="text-gray-600 font-semibold text-lg mb-2">Vue js</p>
                    <p class="text-gray-600 font-semibold text-lg mb-2">Laravel</p>
                    <p class="text-gray-600 font-semibold text-lg mb-2">Tailwindcss</p>
                </div>

                <div class="">
                    <h2 class="font-semibold text-gray-400 text-xl mb-2">Top Articals</h2>
                    <p class="text-gray-600 font-semibold text-lg mb-2">How To Install Tailwindcss In Vite</p>
                    <p class="text-gray-600 font-semibold text-lg mb-2">Tailwindcss Full Course</p>
                    <p class="text-gray-600 font-semibold text-lg mb-2">How To Install Laravel with Vite</p>
                    <p class="text-gray-600 font-semibold text-lg mb-2">Best Ways To Learn Coding</p>
                </div>
                
            </div>

    <div class="pt-60">
         
            
        </div>
            
        
            

        </div>
        
         <div class="container flex flex-col mx-auto w-1/2 mb-40">
            <form action="/blog/{{$post->slug}}/comment" method="POST">
                @csrf
                <div class="flex border-b-4 border-b-[#EC5252]">
                    
                    
                  
                    <input placeholder="Comment" type="text" name="comment" class="w-full bg-transparent outline-4  border-none ">
                    <button type="submit"><i class="fas fa-paper-plane p-2 text-[#EC5252] hover:cursor-pointer hover:text-red-500" style="font-size: 26px;"></i></button>
                    
               </div>
            </form>
            @foreach ($comments as $comment)
            <div class="pt-10 flex border-b-2 border-b-gray-300 pb-4">
    
                {{-- https://cdn-icons-png.flaticon.com/512/149/149071.png --}}
                
               
                <a href="/profile/{{$comment->user->id}}"> <img src="/users_images/{{$comment->user->image_path}}" class="bg-[#EC5252]" style="width: 60px; height:60px; border-radius: 50%;" class="" alt=""></a> 
                <div class="ml-4">
                    <div>
                        <div class="flex gap-4 items-center" >
                           <a href="/profile/{{$comment->user->id}}"><h3 class="text-gray-700 text-xl font-bold">{{$comment->user->name}}</h3></a>  
                           <span class="text-gray-500 ">{{$comment->created_at->diffForHumans()}}</span>
    
                            @if (Auth::check() && $comment->user->id === Auth::user()->id)
                            <form action="/blog/{{$comment->comment_id}}/commentdelete" method="POST">
                                @csrf
                                @method('delete')
                                
                                <button type="submit">
                                    <i class="fas fa-trash ml-auto text-[#EC5252] hover:text-red-400 cursor-pointer"></i>
                                </button>    
                            </form>
                            @endif
                            
                        </div>
                    </div>
                    
                    <p class="text-lg text-gray-600">{{$comment->comment}}</p>
                </div>
            </div>
            @endforeach
         </div>
         
    </div>

    
@endsection