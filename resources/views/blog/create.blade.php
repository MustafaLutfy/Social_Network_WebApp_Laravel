@extends('layouts.app')

@section('content')
    
<div class="container pt-5 mt-20 mx-auto bg-[#EC5252] h-20 rounded-t-2xl">
  <div>
    <h1 class="text-xl text-gray-100 font-bold ml-5 mb-5">Create a Post</h1>
  </div>
    <div class="px-10 py-20  mx-auto bg-gray-100 rounded-b-2xl">
      
        <div>
            <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" class="block w-full rounded-md border-gray-300 py-4 mb-6 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Post Title">
            <textarea type="text" name="description" class="block w-full rounded-md border-gray-300 pt-4 pb-20 mb-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Post"></textarea>
            
            <div>
                <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                  <div class="space-y-2 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="file-upload" class="relative cursor-pointer rounded-md bg-transperant font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="image" type="file" class="sr-only">
                      </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, JPEG up to 5MB</p>
                  </div>
                </div>
              </div>
            </div>

            <div>
                <button type="submit" class="bg-[#EC5252] text-gray-100 font-bold py-4 mt-10 px-4 place-self-start rounded-md text-l hover:bg-indigo-600 transition 0.3s" href="/">Publish</button>
            </div>
            
        </form>
        </div>
    </div>
  </div>
</div>
@endsection