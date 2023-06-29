{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    
    
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                   
                    <a class="no-underline hover:underline" href="/blog">Blog</a>
                    

                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <a class="no-underline hover:underline" href="/followed/{{Auth::user()->id}}">Followed</a>
                        <a href="/profile/{{Auth::user()->id}}"><span>{{ Auth::user()->name }}</span></a>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
        <div>
            @yield('content')
        </div>
        
        

    </div>
</body>
</html> --}}
<!-- AlpineJS -->



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

@vite('resources/css/app.css')

<!-- component -->
<div class="flex bg-white">
	<div class="md:flex w-2/5 md:w-1/4 h-screen bg-white border-r hidden">
		<div class="mx-auto py-10">
			<h1 class="text-2xl font-bold mb-10 cursor-pointer text-[#EC5252] duration-150">Website</h1>
			<ul>

                <a href="/">
                    <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="font-semibold">Home</span>
                    </li>
                </a>

                <a href="/blog">
                    <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="font-semibold">Explore</span>
                    </li>
                </a>
                @if(Auth::check())
         
                <a href="/followed/{{Auth::user()->id}}">
                    <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                        <span class="font-semibold">Following</span>
                    </li>
                </a>
                
                <a href="/profile/{{Auth::user()->id}}">
                    <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="font-semibold">Profile</span>
                    </li>
                 </a>
                <a href="/saved/{{Auth::user()->id}}">
                    <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                        <svg class="mx-1" width="17px" height="21px" viewBox="0 0 17 22" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Square_Timeline" transform="translate(-787.000000, -745.000000)">
                                <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                    <g id="Post-Action" transform="translate(0, 495.000000)">
                                        <g transform="translate(30.000000, 21.000000)" id="Saved">
                                            <g transform="translate(473.000000, 2.000000)">
                                                <g id="ic_Saved-Component/icon/ic_Saved">
                                                    <g id="Saved">
                                                        <circle id="Oval" cx="12" cy="12" r="12"></circle>
                                                        <g id="Group-13-Copy" transform="translate(5.000000, 2.000000)"
                                                            fill="currentColor">
                                                            <path
                                                                d="M2.85714286,-0.952380952 L12.1428571,-0.952380952 C14.246799,-0.952380952 15.952381,0.753200953 15.952381,2.85714286 L15.952381,18.2119141 C15.952381,19.263885 15.09959,20.116746 14.047619,20.116746 C13.6150601,20.116746 13.1953831,19.9694461 12.8576286,19.6992071 L7.5,15.4125421 L2.14237143,19.6992071 C1.32096217,20.3564207 0.122301512,20.2233138 -0.534912082,19.4019046 C-0.805151112,19.0641501 -0.952380952,18.644473 -0.952380952,18.2119141 L-0.952380952,2.85714286 C-0.952380952,0.753200953 0.753200953,-0.952380952 2.85714286,-0.952380952 Z M2.85714286,0.952380952 C1.80517191,0.952380952 0.952380952,1.80517191 0.952380952,2.85714286 L0.952380952,18.2119141 L6.31000952,13.9252491 C7.00569973,13.3686239 7.99430027,13.3686239 8.68999048,13.9252491 L14.047619,18.2119141 L14.047619,2.85714286 C14.047619,1.80517191 13.1948281,0.952380952 12.1428571,0.952380952 L2.85714286,0.952380952 Z"
                                                                id="Rectangle-92"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                        <span class="font-semibold">Saved</span>
                    </li>
                 </a>
                 @endif
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
						stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
					</svg>
					<span class="font-semibold">Settings</span>
				</li>
				{{-- <button class="w-full mt-10 bg-[#EC5252] rounded-full py-1.5 text-white">Learn</button> --}}
			</ul>
		</div>
	</div>
	<main class="min-h-screen w-full bg-white border-l">
		<nav class="flex items-center justify-between px-10 bg-white py-6 border-b">
			<div class="flex items-center bg-gray-0 px-4 py-2 rounded-md space-x-3 w-96">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-gray-500" fill="none"
					viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
				</svg>
			</div>
			<div class="flex items-center space-x-4">
                @if(Auth::check())
                    <img class="w-8 rounded-full" src="/users_images/{{Auth::user()->image_path}}" alt="Elon Musk" />
                     <a class="hidden md:block text-lg text-gray-600" href="/profile/{{Auth::user()->id}}"><span>{{ Auth::user()->name }}</span></a>
                @endif

                @guest

                <a href="{{ route('login') }}" class="flex text-gray-600 
                cursor-pointer transition-colors duration-300
                font-semibold text-blue-600">

                <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path
                        d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                </svg>

                {{ __('Login') }}
            </a>
                @if (Route::has('register'))

                    <a href="{{ route('register') }}" class="flex text-gray-600 hover:text-blue-500
                    cursor-pointer transition-colors duration-300">

                    <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
                    </svg>

                    {{ __('Register') }}
                </a>

                @endif


            @else
                {{-- <a class="no-underline hover:underline" href="/followed/{{Auth::user()->id}}">Followed</a> --}}
                

                <a href="{{ route('logout') }}"
                  class="flex text-gray-600 
                    cursor-pointer transition-colors duration-300
                    font-semibold text-blue-600"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"> <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path
                        d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                         </svg> {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>



            @endguest



			</div>
		</nav>
		<div class="mx-6">
            <div>
                @yield('content')
            </div>
			{{-- <h1 class="my-6 text-3xl">All Courses</h1>
			<div class="md:flex  space-y-3 md:space-y-0 md:space-x-4 mt-6">
				<div class="h-90 bg-gradient-to-r rounded-md from-indigo-600 to-purple-600 p-10">
					<p class="text-3xl font-thin text-indigo-50 cursor-pointer">How to do Basic Jumping and how to
						landing safely</p>
					<div class="flex items-center mt-4 space-x-4">
						<img class="w-10 h-10 rounded-full cursor-pointer" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
						<div>
							<h3 class="text-indigo-50 font-semibold cursor-pointer">Thomas Hope</h3>
							<p class="text-indigo-50 text-sm font-thin">53K views • 2 weeks ago</p>
						</div>
					</div>
				</div>
               
				<div class="h-90 bg-gradient-to-r rounded-md from-indigo-600 to-purple-600 p-10">
					<p class="text-3xl font-thin text-indigo-50 cursor-pointer">How to do Basic Jumping and how to
						landing safely</p>
					<div class="flex items-center mt-4 space-x-4">
						<img class="w-10 h-10 rounded-full cursor-pointer" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
						<div>
							<h3 class="text-indigo-50 font-semibold cursor-pointer">Thomas Hope</h3>
							<p class="text-indigo-50 text-sm font-thin">53K views • 2 weeks ago</p>
						</div>
					</div>
				</div>
			</div>
		</div>
          --}}
            
		{{-- <div class="mx-6 grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-4 mt-10">
			<div class="shadow-lg rounded-t-md overflow-hidden ">
				<div class="">
					<img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
					<div class="p-2 relative">
						<p class="text-lg mt-6 font-semibold">Basic how to ride your skateboard comfortly</p>
						<p>53K views • 2 weeks ago</p>
						<img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
      </div>
					</div>
				</div>
				<div class="shadow-lg rounded-t-md overflow-hidden">
					<div class="">
						<img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
						<div class="p-2 relative">
							<p class="text-lg mt-6 font-semibold">Basic how to ride your skateboard comfortly</p>
							<p>53K views • 2 weeks ago</p>
							<img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
      </div>
						</div>
					</div>
					<div class="shadow-lg rounded-t-md overflow-hidden ">
						<div class="">
							<img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
							<div class="p-2 relative">
								<p class="text-lg mt-6 font-semibold">Basic how to ride your skateboard comfortly</p>
								<p>53K views • 2 weeks ago</p>
								<img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
      </div>
							</div>
						</div>
						<div class="shadow-lg rounded-t-md overflow-hidden ">
							<div class="">
								<img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
								<div class="p-2 relative">
									<p class="text-lg mt-6 font-semibold">Basic how to ride your skateboard comfortly
									</p>
									<p>53K views • 2 weeks ago</p>
									<img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
                  </div>
								</div>
							</div>
						</div>
					</div>  --}}

                    <div>
                        @include('layouts.footer')
                    </div>
          </main>
          
        
</div>