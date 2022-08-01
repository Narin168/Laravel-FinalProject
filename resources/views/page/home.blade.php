@extends('layout.master')

@section('title', 'Home Page')

@section('content')
<div 
class="container max-w-lg px-8 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
      style="background-image: url('https://media.istockphoto.com/photos/house-icon-in-front-of-blue-wall-real-estate-concept-picture-id1062626948?b=1&k=20&m=1062626948&s=170667a&w=0&h=-hiEAHAjOrWlFeSsGQq-yaHxUcqgHLJAF3QsJYbqbaE=')">
        <span class="inline md:block">Welcome To Home Service</span>
      </h1>
      <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta voluptatem ab necessitatibus illo praesentium
        culpa excepturi quae commodi quaerat
      </div>
      <div class="flex flex-col items-center mt-12 text-center">
        <span class="relative inline-flex w-full md:w-auto">
          <a href="#" type="button"
            class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
            Book Now
          </a>
      </div>
    </div>


@endsection
