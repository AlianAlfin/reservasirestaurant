@extends('layouts.navbar')
@section('container')
    <div class="lg:mt-24 lg:gap-6">
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-6 lg:mx-11 object-cover">
            @foreach ($category->menus as $menu)
                <div
                    class="max-w-full  bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-t-lg h-72 w-full object-cover" src="{{ Storage::url($menu->image) }}" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $menu->name }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $menu->description }}</p>
                        <p class="mb-3 font-bold text-red-700 dark:text-gray-400">
                            ${{ $menu->price }}</p>
                    </div>
                </div>
            @endforeach

        </div>
        <button
            class="dark:bg-white dark:hover:bg-gray-400 dark:hover:text-gray-100 dark:text-gray-800 sm:w-auto w-full lg:ml-11 mt-8 text-base justify-between focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 focus:outline-none hover:bg-orange-600 font-medium leading-none text-white py-4 px-8 bg-orange-500 flex items-center">
            <a href="{{ route('categories.index') }}">Back</a>
            <div class="ml-2 mt-0.5">
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1.svg"
                    alt="arrow">
                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1dark.svg"
                    alt="arrow">
            </div>
        </button>
    </div>
@endsection
