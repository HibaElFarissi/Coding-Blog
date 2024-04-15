@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="pt-20">
        <h1 class="text-6xl">Upload Post</h1>
    </div>
</div>


    @if($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-1/5 mb-4 text-white bg-red-600 py-4">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif

<div class="w-4/5 m-auto pt-20">
    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

    <input type="text"
    name="title"
    value="{{ $post->title }}"
    class="bg-transparent block border-b-2 w-full h-20  text-6xl
    outline-none">
    <br>

    <textarea
    name="description"
    placeholder="Add Description here..."
    class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl
    ouline-none">{{ $post->description }}</textarea>
    <br>


    {{-- <div class="bg-grey-lighter pt-15">

         <label class="w-44 flex flex-col items-center px-2 py-3
         bg-white-rounded-lg shadow-lg tracking-wide uppercase border
         border-blue cursor-pointer">
         <span class="mt-2 text-base leading-normal">
            Upload file
         </span>
         <input type="file" name="image" class="hidden">

         </label>

    </div> --}}
    <br>
    <br>
    <button
         type="submit"
         class="uppercase mt-15 bg-green-700 text-gray-100
         font-extrabold  py-4 px-3 hover:bg-green-900">
         Submit Post

    </button>



    </form>

</div>


@endsection






