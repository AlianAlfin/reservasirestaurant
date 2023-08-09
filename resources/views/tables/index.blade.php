@extends('layouts.navbar')
@section('container')
    @foreach ($tables as $table)
        <div
            class="max-w-full lg:mt-20 p-8 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="grid grid-cols-2 gap-6">
                <img class="rounded-t-lg h-75 w-full" src="{{ Storage::url($table->image) }}" alt="" />
                <div class="lg:p-11 lg:ml-11">
                    <h1 class="mb-2 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        {{ $table->name }}</h1>
                    <h5 class="mb-2 text-xl lg:mt-12 tracking-tight text-gray-700 dark:text-white">
                        maximum capacity : {{ $table->guestNumber }} person</h5>
                    <p class="mb-3 text-xl font-xl text-gray-700 dark:text-gray-400">
                        location : {{ $table->location }}</p>
                    <p class="mb-3 text-xl font-xl text-gray-700 dark:text-gray-400">
                        status : {{ $table->status }}</p>
                    <button
                        class="dark:bg-white dark:hover:bg-gray-400 dark:hover:text-gray-100 dark:text-gray-800 sm:w-auto w-full mt-8 text-base justify-between focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 focus:outline-none hover:bg-orange-600 font-medium leading-none text-white py-4 px-8 bg-orange-500 flex items-center">
                        <a href="{{ route('reservations.step.one') }}"> Book Now</a>
                        <div class="ml-2 mt-0.5">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1.svg"
                                alt="arrow">
                            <img class="dark:block hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1dark.svg" alt="arrow">
                        </div>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
@endsection
