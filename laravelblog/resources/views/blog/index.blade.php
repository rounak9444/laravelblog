@extends('layouts.app')

@section('content')
<div class="text-center p-20 bg-blue-900 text-white">
    <h1 class="text-6xl font-extrabold">
     Welcome To Laravel<br>
     Blog Page
      </h1>
</div>


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
         </div>

    
</div>

@endforeach
@endsection