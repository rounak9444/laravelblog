@extends('layouts.app')

@section('content')
<div class="text-center p-20 bg-blue-900 text-white">
    <h1 class="text-6xl font-extrabold">
     Welcome To Laravel<br>
     Blog Page
      </h1>
</div>


@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif




@if(Auth::check())
<div class="pt-15 w-4/5 m-auto">
  <a href="blog/create" class="bg-blue-900 text-white p-4">
    create new post
   </a>
</div>
@endif

@foreach ($posts as $post)
<div class="grid grid-cols-2 gap-10 m-20">
    <div>
     <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
    </div>

        <div>
         <h1 class="text-5xl font-extrabold mb-5">{{ $post->title }}</h1>

          <span class="texy-black">
           By <span class="text-black font-bold">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
          </span>
         
            <div class="mt-8 mb-15">
              <p class="font-bold">{{ $post->description }}</p>
             </div>
                <a href="/blog/{{ $post->slug }}" class="text-bold text-2xl text-white bg-blue-900 p-2 ml-40 rounded-3xl">READ MORE</a>
         
              @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                
                <span class="float-right">
                    <a href="/blog/{{ $post->slug }}/edit" class="text-black">
                        Edit Post
                    </a>

                    <span class="float-right">
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>

              </span>


              @endif               
         
         
            </div>

    
</div>

@endforeach
@endsection