@extends('layouts.app')

@section('content')

<!--Hero: -->
<div class="hero-bg-image  flex flex-col items-center justify-center">
    <h1 class="text-white text-5xl uppercase font-bold pb-10 text-center">Welcome to my blog</h1>
    <a href="/" class="bg-black  text-green-400 py-4 px-5 rounded-lg font-bold uppercase text-xl hover:bg-green-400 hover:text-black">Start Reading</a>
</div>

<!--How to Stay Motivated While Learning to Code: -->
<div class="container sm:grid grid-cols-2 gap-20 mx-auto py-20">
    <div class="mx-2 md:mx-0">
        <img class="sm:rounded-lg" src="{{ asset('images/Cologo.svg') }}" alt="">
    </div>

    <div class="flex flex-col items-left justify-center m-10 sm:m-0 ">
        <h2 class="font-bold text-green-700 text-3xl uppercase">Welcome in Coding Universe</h2>

        <p class="font-bold text-green-500 text-xl pt-2">
            You can find a list of all programming languages here .
        </p>
        <p class="py-4 font-bold leading-6">
            Learning to code can be like preparing for a long battle.<br>
            Ultimately, winning is not always determined by your initial strength,<br>
            but by how well prepared you are and how long you can hold out.
        </p>

        <a href="/" class="bg-black text-green-500 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start hover:text-black hover:bg-green-700">Read More</a>
    </div>

</div>

<!--Blog Categories: -->
    <div class="text-center p-20 bg-gray-900 text-green-600">
        <h2 class="text-4xl text-white">Blog Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-5">
            <div class="font-bold text-3xl py-2 cursor-pointer">Front-End</div>
            <div class="font-bold text-3xl py-2 cursor-pointer">Back-End</div>
            <div class="font-bold text-3xl py-2 cursor-pointer">UI-Design</div>
            <div class="font-bold text-3xl py-2 cursor-pointer">UX-Design</div>
            <div class="font-bold text-3xl py-2 cursor-pointer">Programming</div>
        </div>
    </div>

<!--Recent Posts: -->

<div class="container mx-auto py-20 text-center">
  <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
    <p class="text-gray-900 leading-6 px-10">Put simply, programming is giving a set of instructions to a computer to execute. <br>
        If you’ve ever cooked using a recipe before, you can think of yourself as the computer and the recipe’s author as a programmer. <br>
        The recipe author provides you with a set of instructions that you read and then follow. <br>
        The more complex the instructions, the more complex the result! <br>
        How good are you at giving instructions? Try and get Codey to draw a square!
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 mx-auto">
    <div class= "flex bg-green-700 text-gray-100 pt-10">
        <div class="block m-auto pt-4 pb-15 w-4/5">

            <ul class="md:flex text-xs gap-2">
                <li class="bg-black text-white p-2 rounded inline-block my-1 md:my-0 hover:bg-white  hover:text-green-700 transition: duration-300"><a href="/">Laravel</a></li>
                <li class="bg-black text-white p-2 rounded inline-block my-1 md:my-0 hover:bg-white  hover:text-green-700 transition: duration-300"><a href="/">PHP</a></li>
                <li class="bg-black text-white p-2 rounded inline-block my-1 md:my-0 hover:bg-white  hover:text-green-700 transition: duration-300"><a href="/">Programming</a></li>
                <li class="bg-black text-white p-2 rounded inline-block my-1 md:my-0 hover:bg-white  hover:text-green-700 transition: duration-300"><a href="/">Language</a></li>
            </ul>

            <h3 class="text-l py-10 leading-6">
                <strong>Laravel</strong> is a free and open-source PHP web framework,
                created by Taylor Otwell and intended for the development of web applications following
                the model–view–controller (MVC) architectural pattern and based on Symfony.
                 Some of the features of Laravel are a modular packaging system with a dedicated dependency manager,
                different ways for accessing relational databases,
            </h3>
            <a href="/" class="bg-black  text-green-600 py-4 mb-5 px-5 mx-auto rounded-lg font-bold uppercase text-l inline-block hover:bg-green-200 hover:text-black">Read More</a>
        </div>
    </div>

    <div class="flex">
        <img class="object-cover" src="{{ asset('images/work.jpg') }}" alt="">
    </div>
    <div class="flex">
        <img class="object-cover" src="{{ asset('images/hak.jpg') }}" alt="">
    </div>
    <div class="flex">
        <img class="object-cover" src="{{ asset('images/pc.jpg') }}" alt="">
    </div>
</div>



<!-- newsletter-->
<div class="mt-16 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="rounded-3xl bg-gray-900 py-10 px-6 sm:py-16 sm:px-12 lg:flex lg:items-center lg:p-20">
      <div class="lg:w-0 lg:flex-1">
        <h2 class="text-3xl font-bold tracking-tight text-green-600">Sign up for our newsletter</h2>
        <p class="mt-4 max-w-3xl text-lg text-gray-100">
          Join many others and subscribe to get product updates, market insights, tips &amp; tricks to selling software,
          and more.
        </p>
      </div>
      <div class="mt-12 sm:w-full sm:max-w-md lg:mt-0 lg:ml-8 lg:flex-1">
        <form method="post" class="sm:flex space-y-2">
          <label for="name" class="sr-only">Name</label>
          <label for="email-address" class="sr-only">Email address</label>
          <input id="name" type="name" autocomplete="name" class="w-full rounded-md sm:mr-3 border-white px-5 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-700" placeholder="Your name">
          <input id="email-address" type="email" autocomplete="email" class="w-full rounded-md border-white px-5 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-700" placeholder="Your email">
          <input type="checkbox" value="1" class="hidden" tabindex="-1" autocomplete="off">
          <button type="submit" class="mt-3 flex w-full items-center justify-center rounded-md border border-transparent  px-5 py-3 text-base font-medium text-green-600 bg-black focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-700 sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">Subscribe</button>
        </form>
        <p class="mt-3 text-sm text-gray-100">
          We care about the protection of your data. Read our
          <a href="/" class="font-medium text-green-600 underline">Coding Universe</a>
        </p>
      </div>
    </div>
  </div>


  <!--Ideas : -->

<div class="container mx-auto py-20 text-center">
    <h2 class="font-bold text-5xl py-10">Coding Routine</h2>
      <p class="text-gray-900 leading-6 px-10">In the flow of code, time dances away unnoticed. Deep in the rhythm of logic, the mind traverses through loops and conditions, navigating the labyrinth of syntax and semantics. Challenges arise, bugs emerge, but perseverance is the constant companion, guiding the coder through every hurdle.
        The routine isn’t just about code; it's a symphony of learning. Hours blend seamlessly into research, exploring new libraries, frameworks, and methodologies. Each puzzle solved brings a sense of accomplishment, a new skill mastered.
        Yet, amid the lines of code, breaks are sacred. A pause for coffee, a stroll in the fresh air – moments to refresh the mind and reignite inspiration. Collaboration fills the spaces between, exchanging ideas with peers, gaining new perspectives, and fostering camaraderie within the coding community.
  </div>

{{-- button to up --}}
<div>
    <a href="#" class="back-to-top flex justify-center text-right">
        <svg class="w-14 h-14 rounded-5xl m-5 p-3 hover:bg-green-950 bg-green-900 text-black dark:text-black" rounded aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
        </svg>
    </a>
</div>


{{-- <img class="logo" src="{{ asset('images/Cologo.svg') }}" alt="OSM"> --}}
{{-- <i class="bi bi-arrow-up-short"></i> --}}

@endsection
