@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-10 border-b border-gray-200">
            <h1 class="text-6xl">Blog Posts</h1>
        </div>
    </div>


    @if(session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-full text-gray-50 mb-20   bg-green-600 py-5 text-center">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if(session()->has('delete-post'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-full text-gray-50 mb-20   bg-red-600 py-5 text-center">
                {{ session()->get('delete-post') }}
            </p>
        </div>
    @endif

    {{-- if u are already loggined add a post --}}
     @if(Auth::check())
        <div class="">
            <a href="/blog/create"
             class="bg-green-700 uppercase text-gray-100
             text-l font-extrabold py-3 m-40 ml-20  px-5 rounded" >Add Post</a>
        </div>
    @endif


{{-- {{ $posts }} --}}
{{-- Display all Post --}}
    @foreach($posts as $post)

        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-10 border-b
        border-gray-200">
        <div>
            {{-- <img src="https://fastly.picsum.photos/id/5/5000/3334.jpg?hmac=R_jZuyT1jbcfBlpKFxAb0Q3lof9oJ0kREaxsYV3MgCc" alt=""> --}}
            <img src="{{ asset('Blogs-img/'. $post->image_path) }}" alt="images">
        </div>

        <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post ->title }}
        </h2>

        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800"> {{ $post ->user->name }}
            </span>, Created on {{ date('jS M Y',
            strtotime($post->updated_at)) }}
        </span>

        {{ $post ->user_id }}


            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post ->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-400 focus:bg-blue-500 hover:bg-blue-500 text-gray-100 text-lg
            font-extrabold py-4 px-8 ">
                Keep reading
            </a>

            @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a href="/blog/{{ $post->slug }}/edit" class="bg-green-400 focus:bg-green-500 hover:bg-green-500 uppercase text-gray-100
                        text-l font-extrabold py-3 m-20  px-5">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                    <form action="/blog/{{ $post->slug }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="bg-red-400 focus:bg-red-500 hover:bg-red-500 uppercase text-gray-100
                        text-l font-extrabold py-3 m-10  mb-40 px-5 " type="submit">
                            Delete
                        </button>

                    </form>

                </span>
            @endif

        </div>
    </div>

@endforeach





    <div class="icon-whats">
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-e180f630-013d-456d-9e9c-159256b03185" data-elfsight-app-lazy></div>
    </div>
@endsection









{{--
  @foreach ($posts as $post)
    <div class="container sm:grid grid-cols-2 gap-20 mx-auto py-20 px-5 border-b border-gray-300">
        <div class="flex">
            <img class="object-cover" src="{{ $post->image_path }}" alt="">
        </div>
        <div>
            <h2 class="text-4xl font-bold text-gray-800 py-5 md:pt-0">{{ $post->title }}</h2>
            <div>
            By:<span class="text-gray-500 italic">{{ $post->user->name }}</span>
            on <span class="text-gray-500 italic">{{ date('d-m-Y',strtotime($post->updated_at) )}}</span>
            <p class="text-l py-8 leading-6 text-gray-800">
                {{ $post->description }}
            </p>
            <a href="/blog/{{ $post->slug }}" class="bg-gray-700 border-2 text-green-100 py-4 mb-5 px-5 mx-auto rounded-lg font-bold uppercase text-l inline-block hover:bg-gray-900  hover:text-gray-100">Read More</a>
        </div>
        </div>
    </div>
  @endforeach --}}
