@extends('layouts.app')

@section('content')



<div class="container m-auto text-center pt-10 pb-5">
        <h1 class="text-6xl font-bold">
            {{ $post->title }}
        </h1>
        <div class="mt-2">

        By <span class="italic text-bold text-gray-800">{{ $post->user->name }}</span>,
        Created on {{ date('jS M Y',
        strtotime($post->updated_at)) }}

        </div>
</div>

<div class="container m-auto pt-15 pb-15">
    <div class="flex h-96">
         <img class="object-cover w-full" src="{{ asset('Blogs-img/'. $post->image_path) }}" alt="images">
    </div>

    <div class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
    </div>
</div>
<br>
<livewire:comments :model="$post"/>





@endsection
