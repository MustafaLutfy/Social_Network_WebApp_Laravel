@extends('layouts.app')

@section('content')

<div class="hero-bg-image flex flex-col items-center justify-center">
    <h1 class="text-gray-100 text-3xl md:text-5xl uppercase font-bold pb-10 text-center ">Welcome to my blog</h1>
    <a class="bg-gray-100 text-gray-700 py-4 px-6 rounded-md text-xl font-bold hover:bg-gray-200 transition 0.3s" href="/">Start Reading</a>
</div>

<div class="container sm:grid grid-cols-2 gap-10 mx-auto py-20 ">
    <div class="mx-4 md:mx-0">
        <img class="sm:rounded-lg" src="https://picsum.photos/id/237/960/620" alt="">
    </div>
    
    <div class="mx-4 md flex flex-col justify-center">
        <h2 class="font-bold text-gray-700 text-4xl uppercase">How to do any thing</h2>
        <p class="font-bold text-gray-600 text-xl pt-2">nesciunt facere veritatis, culpa asperiores?</p>
        <p class="py-4 text-gray-500 text-lg leading-6 mb-4"> facere veritatis, cuLorem ipsum dolor harum nesciuntlpa asperisit amet consectetur, adipisicing elit. Voluagnam dolorem eos illum autemptatum aut temporibus, ea harum possimus aliquam, aliquid m! Corrupti in fugiat ores?</p>
        <a class="bg-gray-600 text-gray-100 font-bold py-4 px-6 place-self-start rounded-md text-xl hover:bg-gray-700 transition 0.3s" href="/">Read More</a>
    </div>
</div>

<div>
    <h2 class="font-bold text-center text-5xl py-10">Recent Posts</h2>
    <p class="text-center text-gray-400 leading-6 mb-6 px-10">Luiolestiae. Cons equunttis, aolestiae. Consequuntmet quos molestiae. Consequuntur, sapiente vero.</p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 mx-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="block mx-auto mb-20 pt-4 pb-15 w-4/5">
            <ul class="md:flex gap-2">
                <li class="bg-yellow-100 text-yellow-700 p-3 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition 0.3s"><a href="/">PHP</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-3 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition 0.3s"><a href="/">C++</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-3 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition 0.3s"><a href="/">Laravel</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-3 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition 0.3s"><a href="/">Vue js</a></li>
            </ul>
            <h3 class="text-xl py-20 leading-8">
                LoLorem insectetur adipisicing elit. Quidem, met cosectetur adipisicing elit. Quidem, tempore atque ut voluptatem corporis ratione dignissimos. Praesentium, sapiente sit odit aliquam perspiciatis sed illo quaerat amet nod illo quaerat amet nonseqem ipsum dolor sit aLoLorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, met consectetur adipisicing elit. Quidem, tempore atque ut voluptatem corporis ratione dignissimos. Praesentium, sapiente sit odit aliquam perspiciatis sed illo quaerat amet nod illo quaerat amet nonsequuntur lauuntur laborum?
            </h3>

            <a class="bg-transparent border-2 text-gray-100 py-4 mb-100 px-5 rounded-lg font-bold" href="/">Read More</a>
        </div>
        
    </div>
    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/234/960/620" alt="">
    </div>
    
</div>
@endsection