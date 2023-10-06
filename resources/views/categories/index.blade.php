@extends('layouts.navbar')
@section('container')
    <div
        class="2xl:container flex justify-center items-center w-full 2xl:mx-auto lg:px-20 md:py-12 md:px-6 py-9 px-4 lg:mt-11">
        <div class="w-80 md:w-auto grid lg:grid-cols-2 grid-cols-1 lg:gap-8 gap-6">
            @foreach ($categories as $category)
                <div class="relative group">
                    <img class="lg:block hidden w-full object-cover  h-[450px]" src="{{ Storage::url($category->image) }}" />
                    <img class="lg:hidden md:block hidden w-full object-cover h-[450px]"
                        src="{{ Storage::url($category->image) }}" />
                    <img class="w-full object-cover md:hidden h-[450px]" src="{{ Storage::url($category->image) }}" />

                    <div
                        class="opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full">
                    </div>
                    <div
                        class="absolute top-0 left-0 w-full h-full flex justify-start items-end opacity-0 hover:opacity-100 p-8">
                        <p class="font-semibold text-2xl leading-6 text-white font-h1">{{ $category->name }}</p>
                    </div>
                </div>

                <div
                    class="lg:px-6 lg:py-0 md:py-16 md:px-24 py-16 px-6 flex flex-col justify-center items-center text-center bg-gray-100 dark:bg-gray-800">
                    <h2
                        class="font-h1 dark:text-white font-semibold lg:text-4xl text-3xl lg:leading-10 leading-9 text-gray-800 lg:w-full md:w-7/12 w-full">
                        {{ $category->name }}</h2>
                    <p
                        class="font-p dark:text-gray-300 font-medium text-base leading-6 text-gray-600 mt-4 lg:w-full md:w-7/12 w-full">
                        {{ $category->description }}</p>
                    <a href="{{ route('categories.show', $category->id) }}"
                        class="font-h1 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-orange-600 text-white text-base leading-4 bg-orange-500 lg:px-10 py-4 lg:w-auto w-72 mt-16">Discover
                        More</a>
                </div>

                {{-- <div class="relative group">
            <img class="lg:block hidden w-full object-cover h-[400px] rounded-lg"
                src="{{ Storage::url($category->image) }}" />
            <img class="lg:hidden md:block hidden w-full object-cover rounded-lg"
                src="{{ Storage::url($category->image) }}" />
            <img class="w-full md:hidden rounded-lg" src="{{ Storage::url($category->image) }}" />

            <div
                class="opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full">
            </div>
            <div
                class="absolute top-0 left-0 w-full h-full flex justify-start items-end opacity-0 hover:opacity-100 p-8">
                <p class="font-semibold text-2xl leading-6 text-white">{{ $category->name }}</p>
            </div>
        </div> --}}
            @endforeach
        </div>
    </div>
@endsection
