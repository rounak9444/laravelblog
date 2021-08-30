@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col pb-10 break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-red-600 text-white py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
            {{ Auth::user()->name }} Dashboard
            </header>

            <div class="w-full p-20">
                <p class="text-black text-3xl text-center">
                 Welcome <span class=" text-red-600 text-5xl text-bold text-center">{{ Auth::user()->name }}</span> <br>
                  You are logged in!
                </p>
            </div>

            <div class="grid grid-cols-4 gap-4">

                   <div class="text-center"><a href="/blog" class="text-white text-bold bg-blue-900 p-3">
                        View Post
                    </a></div>

                    <div class="text-center"><a href="/blog/create" class="text-white text-bold bg-blue-900 p-3">
                        Create Post
                    </a></div>
                   
                   
                    <div class="text-center"><a href="/blog" class="text-white text-bold bg-blue-900 p-3">
                        Update Post
                    </a></div>
                    

                    <div class="text-center"><a href="/blog" class="text-white text-bold bg-blue-900 p-3">
                        Delete Post
                    </a></div>
                    

                    

                    

                </div>
        </section>
    </div>
</main>
@endsection
