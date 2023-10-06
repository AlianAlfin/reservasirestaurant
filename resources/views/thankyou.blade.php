@extends('layouts.navbar')
@section('container')
    <div class="grid grid-cols-1">
        <div class="mt-11">
            <h1 class="flex justify-center font-extrabold text-3xl">Thank You</h1>
            <p class="flex justify-center font-semibold text-3xl">Your reserved is ready</p>
        </div>
        <button
            class="font-h1 dark:bg-white dark:hover:bg-gray-400 dark:hover:text-gray-100 dark:text-gray-800 sm:w-auto w-full mt-8 text-base justify-between focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 focus:outline-none hover:bg-orange-600 font-medium leading-none text-white py-4 px-8 bg-orange-500 flex items-center">
            <a href="/"> Back Home</a>
            <div class="ml-2 mt-0.5">
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1.svg" alt="arrow">
                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1dark.svg"
                    alt="arrow">
            </div>
        </button>
    </div>
@endsection
