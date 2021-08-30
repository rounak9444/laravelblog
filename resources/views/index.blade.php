@extends('layouts.app')

@section('content')
<div class=" bg-local bg-cover grid grid-cols-1 m-auto" style="background-image: url(https://cdn.pixabay.com/photo/2018/05/14/16/54/cyber-3400789_1280.jpg)">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Welcome to blogpost app
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-blue-900 text-white py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://dtechsystem.net/wp-content/uploads/2019/07/images-2.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-black">
                Do you want to make your blogapp with <h1 class="text-red-600 text-3xl font-extrabold ">LARAVEL ?</h1>
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.
            </p>

            <p class="font-extrabold text-black text-s pb-9">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos molestias porro vero. Vel alias.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-900 text-white text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-red-600 text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            All About Laravel
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Micro Framework Support
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Latest PHP Support
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Built In Features
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Popularity
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-600">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-gray-400 text-red-600 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-3xl">
                    Laravel 
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-red-600 text-black text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://dtechsystem.net/wp-content/uploads/2019/07/images-2.jpg" alt="">
        </div>
    </div>


 



</div>

@endsection