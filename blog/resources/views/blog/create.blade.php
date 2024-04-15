@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="pt-20">
        <h1 class="text-6xl">Create Post</h1>
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
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf

    <input type="text"
    name="title"
    placeholder="Add Title here..."
    class="bg-transparent block border-b-2 w-full h-20  text-6xl
    outline-none">
    <br>

    <textarea
    name="description"
    placeholder="Add Description here..."
    class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl
    ouline-none"></textarea>
    <br>


    <div class="bg-grey-lighter pt-15">
       
         <label class="w-44 flex flex-col items-center px-2 py-3
         bg-white-rounded-lg shadow-lg tracking-wide uppercase border
         border-blue cursor-pointer">
         <span class="mt-2 text-base leading-normal">
            Upload file
         </span>
         <input type="file" name="image" class="hidden">

         </label>

    </div>
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


{{--
<div class="container m-auto t pt-10 pb-5">
    <form action="/blog" method="POST" enctype='mulipart/form-data'>
        @csrf

        <input
        type="text"
        name="title"
        placeholder="Title"
        class="w-full text-5xl h-20 rounded-lg shadow-lg border-b p-10 mb-5"
        />

        <textarea
        name="description"
        placeholder="Description"
        class="w-full text-2xl h-60 rounded-lg shadow-lg border-b p-10 mb-5">
        </textarea>


        <div class="flex items-center justify-center w-full">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-200 dark:hover:bg-bray-800 bg-gray-200 hover:bg-gray-300 dark:border-gray-100 dark:hover:border-gray-200 dark:hover:bg-gray-300">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>
        </div>
        <br>

        <button
        type="submit"
        class="bg-green-700 hover:bg-green-200
        text-gray-200 hover:text-gray-700
        transition-duration-300
        cursor-pointer
        p-5 rounded-lg
        fony-bold uppercase">Save The Post</button>

    </form>
</div> --}}


