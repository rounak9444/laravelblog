@extends('layouts.app')

@section('content')
<div class="text-center p-20 bg-blue-900 text-white">
    <h1 class="text-6xl font-extrabold">
     Start Creating Your Post
      </h1>
</div>



<div class="w-4/5 m-auto pt-20">

<form action="/blog" method="POST" enctype="multipart/form-data">
@csrf
<lable class="text-bold text-5xl text-black"> Enter Your Post Title
<input 
            type="text"
            name="title"
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
</lable>
<lable class="text-bold text-5xl text-black"> Enter Your Post Description
        <textarea 
            name="description"
            class="py-20 bg-transparent block border-b-2 w-full h-20 text-xl outline-none"></textarea>
</lable>

<lable class="text-bold text-5xl text-black"> Upload Post Image
        <div class="bg-grey-lighter pt-15">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>
        </lable>
        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-900 text-gray-100 text-lg font-extrabold py-4 px-8">
            Submit Post
        </button>



</form>



</div>




@if ($errors->any())
    <div class="w-4/5 m-auto pt-10">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif




@endsection